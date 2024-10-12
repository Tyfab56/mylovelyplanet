<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\ComoresUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

use Carbon\Carbon;

class AuthController extends Controller
{
    public function registerLogin(Request $request)
    {

        // Handle preflight request for CORS
        if ($request->isMethod('OPTIONS')) {
            return response()->json([], 200, ['Access-Control-Allow-Origin' => '*']);
        }

        // Validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'nosubscribe',
                'msg' => 'Invalid input',
            ]);
        }
        // renvoyer les données si en mode consultation
        $secretToken = $request->input('secret_token');
        if ($secretToken && $secretToken === "ahswrospfrtygj") {
            // Secret token is valid, bypass password check
            $user = ComoresUser::where('email', $request->input('email'))->first();
            if ($user) {
                // Return updated user data, skipping password validation
                $today = Carbon::today();
                if ($user->last_vote_date != $today->toDateString()) {
                    $user->daily_votes_remaining = $user->votes_max;
                    $user->last_vote_date = $today->toDateString();
                    $user->save();
                }
                return response()->json([
                    'status' => 'login',
                    'msg' => 'Login successful',
                    'email' => $user->email,
                    'id' => $user->id,
                    'lang_default' => $user->lang_default,
                    'last_vote_date' => $user->last_vote_date,
                    'votes_totaux' => $user->votes_totaux,
                    'votes_suivis' => $user->votes_suivis,
                    'daily_votes_remaining' => $user->daily_votes_remaining,
                    'votes_max' => $user->votes_max,
                ]);
            } else {
                return response()->json(['status' => 'nosubscribe', 'msg' => 'User not found.']);
            }
        }
        // Check if user already exists
        $user = ComoresUser::where('email', $request->email)->first();

        if (!$user) {
            // Register user
            $user = ComoresUser::create([

                'email' => $request->email,
                'password' => Hash::make($request->password),
                'lang_default' => $request->input('lang_default', 'en'), // Default language
                'accepts_communication' => $request->accepts_communication
            ]);

            // Send verification email (assuming Mail configuration is set)
            // Mail::to($user->email)->send(new VerifyEmail($user));

            return response()->json([
                'status' => 'subscribe',
                'msg' => 'Verification email sent.',
                'email' => $user->email,
                'id' => $user->id,
                'lang_default' => $user->lang_default,
                'last_vote_date' => $user->last_vote_date,
                'votes_totaux' => $user->votes_totaux,
                'votes_suivis' => $user->votes_suivis,
                'daily_votes_remaining' => $user->daily_votes_remaining,
                'votes_max' => $user->votes_max

            ]);
        } else {
            // Login logic
            if (Hash::check($request->password, $user->password)) {
                // Check if voting data needs to be reset
                $today = Carbon::today();
                if ($user->last_vote_date != $today->toDateString()) {
                    $user->daily_votes_remaining = $user->votes_max;
                    $user->last_vote_date = $today->toDateString();
                    $user->save();
                }

                return response()->json([
                    'status' => 'login',
                    'msg' => 'Login successful',
                    'email' => $user->email,
                    'id' => $user->id,
                    'lang_default' => $user->lang_default,
                    'last_vote_date' => $user->last_vote_date,
                    'votes_totaux' => $user->votes_totaux,
                    'votes_suivis' => $user->votes_suivis,
                    'daily_votes_remaining' => $user->daily_votes_remaining,
                    'votes_max' => $user->votes_max
                ]);
            } else {
                return response()->json(['status' => 'nosubscribe', 'msg' => 'Incorrect credentials']);
            }
        }
    }

    // Email verification logic
    public function verifyEmail($token)
    {
        // Assume token verification logic here
        // Update user email_verif status
        $user = ComoresUser::where('email_verif_token', $token)->first();

        if ($user) {
            $user->email_verif = 1;
            $user->save();
            return response()->json(['status' => 'verified', 'msg' => 'Email verified successfully.']);
        }

        return response()->json(['status' => 'nosubscribe', 'msg' => 'Invalid token']);
    }
}
