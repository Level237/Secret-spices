<?php

namespace App\Providers;

use App\Models\Weight;
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

        view()->composer('layouts.header', function ($view) {
            $weights=Weight::all();
            $view->with('current_locale', app()->getLocale());
            $view->with('weights', $weights);
            $view->with('available_locales', config('app.available_locales'));
        });

    }
}