<?php

namespace App\Providers;

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
        // Détection de la langue à partir du premier segment d'URL (en, fr)
        $locale = request()->segment(1);
        $supported = ['en', 'fr'];

        if (in_array($locale, $supported)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale(config('app.locale'));
        }
    }
}
