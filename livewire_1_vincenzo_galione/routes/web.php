<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,  'homepage'])->name('homepage');
Route::get('/posts', [PublicController::class,  'posts'])->name('posts');

