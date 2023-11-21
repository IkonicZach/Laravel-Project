<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index']);


// Post routes starts here 
Route::get('/posts', [PostController::class, 'home']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/create', [PostController::class, 'store']);

Route::get('/posts/{id}/add', [PageController::class, 'add']);

Route::get('/posts/bookmarks', [PageController::class, 'show']);
// Post routes ends here 

// User routes starts here

Route::get('/user/register', [RegisterController::class, 'show']);

// User routes ends here