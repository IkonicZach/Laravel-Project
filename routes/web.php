<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index']);


Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/create', [PostController::class, 'store']);