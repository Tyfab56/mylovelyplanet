<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\VoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register-login', [AuthController::class, 'registerLogin']);
Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail']);

Route::post('/vote', [VoteController::class, 'vote']);
Route::post('/remove-vote', [VoteController::class, 'removeVote']);
Route::get('/leaderboard', [VoteController::class, 'getUserLeaderboard']);
