<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComoresVote;
use App\Models\ComoresUser;
use App\Models\ComoresSpot;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function vote(Request $request)
    {
        // Supposons que vous recevez l'email ou l'ID de l'utilisateur dans la requête
        $user = ComoresUser::where('email', $request->input('email'))->first();

        // Vérifier si l'utilisateur existe dans la base de données
        if (!$user) {
            return response()->json([
                'success' => false,
                'code' => 'USER_NOT_FOUND',
            ], 401);
        }

        // Vérifier la date du dernier vote
        $today = Carbon::now()->toDateString();
        $lastVoteDate = $user->last_vote_date;

        // Si le dernier vote n'est pas aujourd'hui, réinitialiser le compteur
        if ($lastVoteDate !== $today) {
            $user->daily_votes_remaining = $user->votes_max; // Réinitialiser au max de votes par jour
            $user->last_vote_date = $today; // Mettre à jour la date du dernier vote
            $user->save();
        }

        // Vérifier si l'utilisateur a encore des votes disponibles
        if ($user->daily_votes_remaining > 0) {
            // Enregistrer le vote
            ComoresVote::create([
                'user_id' => $user->id,
                'spot_id' => $request->spot_id, // L'ID du spot pour lequel l'utilisateur vote
            ]);

            // Décrémenter le compteur de votes restants
            $user->daily_votes_remaining--;
            $user->votes_totaux++;
            $user->save();

            return response()->json([
                'success' => true,
                'code' => 'VOTE_ACCEPTED',
                'remainingVotes' => $user->daily_votes_remaining, // Nombre de votes restants
                'votes_totaux' => $user->votes_totaux,
            ], 200);
        } else {
            // Si le nombre de votes maximum est atteint
            return response()->json([
                'success' => false,
                'code' => 'VOTE_DENIED_MAX_REACHED',
            ]);
        }
    }

    public function removeVote(Request $request)
    {
        // Supposons que vous recevez l'email ou l'ID de l'utilisateur dans la requête
        $user = ComoresUser::where('email', $request->input('email'))->first();

        // Vérifier si l'utilisateur existe dans la base de données
        if (!$user) {
            return response()->json([
                'success' => false,
                'code' => 'USER_NOT_FOUND',
                'message' => 'Utilisateur non trouvé',
            ]);
        }

        // Obtenir la date d'aujourd'hui
        $today = Carbon::now()->toDateString();

        // Vérifier si un vote existe pour cet utilisateur, ce spot, et qu'il a été fait aujourd'hui
        $vote = ComoresVote::where('user_id', $user->id)
            ->where('spot_id', $request->input('spot_id'))
            ->whereDate('created_at', $today) // Vérifier que le vote a été fait aujourd'hui
            ->first();

        if (!$vote) {
            return response()->json([
                'success' => false,
                'code' => 'VOTE_NOT_FOUND_OR_NOT_TODAY',
                'message' => 'Aucun vote trouvé pour aujourd\'hui.',
            ]);
        }

        // Supprimer le vote
        $vote->delete();

        // Incrémenter le compteur de votes restants et décrémenter les votes totaux
        $user->daily_votes_remaining++;
        $user->votes_totaux--;
        $user->save();

        return response()->json([
            'success' => true,
            'code' => 'VOTE_REMOVED',
            'remainingVotes' => $user->daily_votes_remaining, // Nombre de votes restants mis à jour
            'votes_totaux' => $user->votes_totaux,
        ]);
    }

    public function getUserLeaderboard(Request $request)
    {
        // Récupérer l'utilisateur via l'email fourni dans la requête
        $user = ComoresUser::where('email', $request->input('email'))->first();
        $lang = $request->input('lang');

        if (!$user) {
            // Return early if the user is not found
            return response()->json([
                'success' => false,
                'message' => 'Utilisateur non trouvé',
            ], 404);
        }

        // 1. Récupérer les 7 spots les plus votés globalement
        $globalTop7 = ComoresVote::select('spot_id', DB::raw('count(*) as total_votes'))
            ->groupBy('spot_id')
            ->orderBy('total_votes', 'desc')
            ->limit(7)
            ->pluck('spot_id')
            ->toArray(); // Tableau des 7 spots les plus votés

        // 2. Récupérer les 7 spots les plus votés de l'utilisateur
        $userTop7 = ComoresVote::select('spot_id', DB::raw('count(*) as total_votes'))
            ->where('user_id', $user->id)
            ->groupBy('spot_id')
            ->orderBy('total_votes', 'desc')
            ->limit(7)
            ->pluck('spot_id')
            ->toArray(); // Tableau des 7 spots de l'utilisateur

        if (empty($userTop7)) {
            // Return early if the user has no votes
            return response()->json([
                'success' => false,
                'message' => 'L\'utilisateur n\'a pas de votes enregistrés.',
            ], 200);
        }

        // 3. Calculer le score de l'utilisateur en comparant les spots
        $score = 0;

        foreach ($userTop7 as $index => $userSpotId) {
            if (in_array($userSpotId, $globalTop7)) {
                if ($globalTop7[$index] === $userSpotId) {
                    $score += 3; // 3 points pour un spot à la bonne position
                } else {
                    $score += 1; // 1 point pour un spot dans le top 7 mais pas à la bonne position
                }
            }
        }

        // 4. Récupérer tous les utilisateurs classés par votes totaux
        $allUsers = ComoresUser::select('id', 'votes_totaux')
            ->orderBy('votes_totaux', 'desc')
            ->get();

        // 5. Calculer la position globale de l'utilisateur
        $userRank = $allUsers->search(function ($u) use ($user) {
            return $u->id === $user->id;
        }) + 1; // +1 pour commencer à 1 au lieu de 0

        // 6. Déterminer la tranche de classement de l'utilisateur
        $rankingCategory = '';
        if ($userRank <= 50) {
            $rankingCategory = 'Top 50';
        } elseif ($userRank <= 100) {
            $rankingCategory = 'Top 100';
        } elseif ($userRank <= 1000) {
            $rankingCategory = 'Top 1000';
        } else {
            $rankingCategory = 'Beyond Top 1000';
        }

        // 7. Récupérer le leaderboard de l'utilisateur
        $votes = ComoresVote::select('spot_id', DB::raw('count(*) as total_votes'))
            ->where('user_id', $user->id)
            ->groupBy('spot_id')
            ->orderBy('total_votes', 'desc')
            ->get();

        $leaderboard = $votes->map(function ($vote) use ($lang) {
            $spot = ComoresSpot::where('id', $vote->spot_id)
                ->where('lang', $lang)
                ->first();

            if ($spot) {
                return [
                    'spot_id' => $spot->id,
                    'spot_name' => $spot->ile . ' - ' . $spot->name,
                    'spot_ile' => $spot->ile,
                    'spot_description' => $spot->description,
                    'spot_image' => $spot->image,
                    'total_votes' => $vote->total_votes,
                ];
            }

            return null;
        })->filter();

        // 8. Retourner le classement de l'utilisateur avec son score et sa catégorie de classement
        return response()->json([
            'success' => true,
            'leaderboard' => $leaderboard,
            'user_score' => $score, // Score calculé
            'user_rank' => $userRank, // Rang global de l'utilisateur
            'ranking_category' => $rankingCategory, // Tranche du classement de l'utilisateur
        ], 200);
    }
}
