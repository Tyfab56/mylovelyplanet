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
        // Récupérer l'email de l'utilisateur à partir de la requête
        $email = $request->input('email');

        // Vérifier que l'utilisateur existe (dans ComoresUsers par exemple)
        $user = \App\Models\ComoresUser::where('email', $email)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Utilisateur non trouvé',
            ]);
        }

        // Récupérer les votes de l'utilisateur et les grouper par spot
        $votes = ComoresVote::select('spot_id', DB::raw('count(*) as total_votes'))
            ->where('user_id', $user->id)
            ->groupBy('spot_id')
            ->orderBy('total_votes', 'desc')
            ->get();

        // Créer une collection pour stocker les infos des spots
        $leaderboard = $votes->map(function ($vote) {
            $spot = ComoresSpot::find($vote->spot_id);
            return [
                'spot_id' => $spot->id,
                'spot_name' => $spot->name,
                'spot_description' => $spot->description,
                'spot_image' => $spot->image,
                'total_votes' => $vote->total_votes,
            ];
        });

        // Retourner le classement sous forme de JSON
        return response()->json([
            'success' => true,
            'leaderboard' => $leaderboard,
        ], 200);
    }
}
