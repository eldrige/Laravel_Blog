<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts', function () {
    return view('posts/index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LogoutController::class, 'flush'])->name('logout');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('postlike');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// the auth middlware protects routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
