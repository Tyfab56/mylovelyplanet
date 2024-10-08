<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pwa/{any}', function () {
    return view('pwa.index');  // Make sure this points to your PWA's index file
})->where('any', '.*');

Route::get('/tostore', [StoreController::class, 'tostore'])->name('tostore');
