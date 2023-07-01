<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/search', [AnimeController::class,'index'])->name('animes.index');
    Route::get('/animestore',[AnimeController::class,'create']);
    //Route::get('/search',[AnimeController::class,'seasonsearch']);
    Route::get('/posts/comments/{post}',[PostController::class,'comment']);
    //Route::get('/posts/comments/{post}',[CommentController::class, 'index']);
    Route::get('/posts/{anime}',[PostController::class, 'index']);
    Route::get('/posts/{anime}/{evaluation}', [EvaluationController::class, 'index']);
    Route::post('/animestore',[AnimeController::class,'store']);
    Route::post('/posts/{anime}',[PostController::class,'store']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
