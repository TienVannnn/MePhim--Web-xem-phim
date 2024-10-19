<?php

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\FilmController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/danh-sach-{slug}', [CategoryController::class, 'category']) -> name('category');
Route::get('/watch/{slug}/{episodeSlug}', [FilmController::class, 'film_watching']) -> name('watching.film');
Route::get('/{slug}', [FilmController::class, 'detail_film']) -> name('detail.film');
Route::get('search_film', [SearchController::class, 'search_film']) -> name('search_film');
