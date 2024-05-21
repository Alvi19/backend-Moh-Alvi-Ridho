<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [UserController::class, 'index']);

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
