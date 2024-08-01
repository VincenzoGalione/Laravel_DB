<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create' , [ArticleController::class, 'create'])->name('article.create')->middleware('auth');


Route::get('/edit/{article}' , [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');

Route::get('/show/{article}' , [ArticleController::class, 'show'])->name('article.show');

