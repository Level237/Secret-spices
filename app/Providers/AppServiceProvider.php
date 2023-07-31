<?php

namespace App\Providers;

use App\Models\Category;
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
            $categories=Category::all();
            $view->with('current_locale', app()->getLocale());
            $view->with('weights', $weights);
            $view->with('categories', $categories);
            $view->with('available_locales', config('app.available_locales'));
        });

        view()->composer('products.details', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
  view()->composer('homepage', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
 view()->composer('Events.index', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
        view()->composer('Recipes.details', function ($view) {
            $weights=Weight::all();
            $categories=Category::all();
            $view->with('current_locale', app()->getLocale());
            $view->with('weights', $weights);
            $view->with('categories', $categories);
            $view->with('available_locales', config('app.available_locales'));
        });

    }
}