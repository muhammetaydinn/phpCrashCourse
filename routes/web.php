<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/greet/{name?}/notgreet/{name2?}', [GreetingController::class, 'greet']);
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
