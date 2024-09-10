<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RecommendationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class)->except('index');
Route::resource('logout', LogoutController::class);

// Route::view('login', 'auth.login')->name('login');
// Route::post('login', [AuthController::class, 'login'])->name('login');
// Route::view('register', 'auth.register')->name('register');
// Route::post('register', [AuthController::class, 'register'])->name('register');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomepageController::class, 'index'])->name('Homepage');
Route::get('/movie', [HomepageController::class, 'allMovie'])->name('allMovie');
Route::get('/movie/{id}', [HomepageController::class, 'show'])->name('showMovie');
Route::resource('recommendations', RecommendationController::class);
Route::resource('auth', AuthController::class);
Route::resource('history', HistoryController::class);
// Route::resource('movie', MovieController::class);
// Route::resource('history', HistoryController::class);

Route::prefix('admin')->group(function () {
    Route::resource('genres', GenreController::class);
    Route::resource('movies', MovieController::class);
    Route::resource('histories', HistoryController::class);
});