<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacebookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/feed', [FacebookController::class, 'feed']);
Route::get('/facebook-post',[FacebookController::class, 'fbPost']);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', "\App\Http\Controllers\PostController");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

