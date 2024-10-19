<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        View::composer('front.layout.header', function ($view) {
            $data = app('App\Services\Front\HomeService')->getAllData();
            $phimLe = $data['phimLe'] ?? [];
            $phimBo = $data['phimBo'] ?? [];
            $hoatHinh = $data['hoatHinh'] ?? [];
            $tvShows = $data['tvShows'] ?? [];

            $view->with(compact('phimLe', 'phimBo', 'hoatHinh', 'tvShows'));
        });
    }
}
