<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [PublicController::class,  'homepage'])->name('homepage');
Route::get('/posts', [PublicController::class,  'posts'])->name('posts');

//ArticleController

//Create
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

//Index
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

//Show
Route::get('/articles/show{article}', [ArticleController::class, 'show'])->name('articles.show');

//Edit
Route::get('/articles/edit{article}', [ArticleController::class, 'edit'])->name('articles.edit');



