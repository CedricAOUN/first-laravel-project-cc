<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.details');

Route::fallback(function () {
    return view('errors.not-found');
})->name('not-found');
