<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComoresVote;
use App\Models\ComoresUser;
use Carbon\Carbon;
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
            $user->save();

            return response()->json([
                'success' => true,
                'code' => 'VOTE_ACCEPTED',
                'remainingVotes' => $user->daily_votes_remaining, // Nombre de votes restants
            ], 200);
        } else {
            // Si le nombre de votes maximum est atteint
            return response()->json([
                'success' => false,
                'code' => 'VOTE_DENIED_MAX_REACHED',
            ], 403);
        }
    }
}
