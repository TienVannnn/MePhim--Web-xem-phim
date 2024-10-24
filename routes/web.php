<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\FilmController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Front\GoogleController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Backend\ManagerController;
use App\Http\Controllers\Backend\ReusableController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController as BackendAuthController;

#Backend
Route::get('/admin/login', [BackendAuthController::class, 'form_login'])->name('login');
Route::post('/admin/login', [BackendAuthController::class, 'login'])->name('handle-login');
Route::middleware('auth:manager')->prefix('/admin')->group(function () {
    Route::get('/logout', [BackendAuthController::class, 'logout'])->name('logout.admin');
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    #Quản lý nhân viên
    Route::resource('/manager', ManagerController::class);
    #Quản lý bài viết
    Route::resource('/blog', BlogController::class);
});
#Change Status
Route::post('/change-status/{id}/{slug}', [ReusableController::class, 'changeStatus'])->name('reusable.changeStatus');




#Front
#Login
Route::get('/login', [AuthController::class, 'page_login'])->name('front.login');
Route::post('/login', [AuthController::class, 'login'])->name('front.handleLogin');
# Google Login
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
#Profile User
Route::get('/profile', [AuthController::class, 'profile'])->name('front.user.profile');
#Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('front.logout');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/danh-sach-{slug}', [CategoryController::class, 'category'])->name('category');
Route::get('/watch/{slug}/{episodeSlug}', [FilmController::class, 'film_watching'])->name('watching.film');
Route::get('/search-film', [SearchController::class, 'search_all_film'])->name('search_all_film');
Route::get('/{slug}', [FilmController::class, 'detail_film'])->name('detail.film');



Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
