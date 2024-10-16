<?php

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\FilmController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/danh-sach-{slug}', [CategoryController::class, 'category']) -> name('category');
Route::get('/{slug}', [FilmController::class, 'detail_film']) -> name('detail.film');
