<?php

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/category', [CategoryController::class, 'category']);
