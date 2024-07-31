<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,  'homepage'])->name('homepage');
<<<<<<< HEAD

=======
Route::get('/posts', [PublicController::class,  'posts'])->name('posts');
>>>>>>> 8d69d6fe72516e041a8ccf6d2ae4c9b6dcb76ec9

//ArticleController

//Create
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

//Index
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

//Show
Route::get('/articles/show{article}', [ArticleController::class, 'show'])->name('articles.show');

//Edit
Route::get('/articles/edit{article}', [ArticleController::class, 'edit'])->name('articles.edit');



