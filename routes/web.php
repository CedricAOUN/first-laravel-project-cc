<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.details');

Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'createBaseArticles'])->name('articles.createBase');
    Route::get('/modifier/{id}', [ArticleController::class, 'modifyArticles'])->name('articles.modify');
    Route::get('/supprimer/{id}', [ArticleController::class, 'deleteArticles'])->name('articles.delete');
});

Route::fallback(function () {
    return view('errors.not-found');
})->name('not-found');
