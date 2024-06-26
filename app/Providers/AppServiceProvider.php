<?php

namespace App\Providers;

use App\Models\Social;
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

        View::composer('layouts.master', function($view){
            $socials = Social::get()->first();
            $view->with('socials', $socials);
        });
    }
}
