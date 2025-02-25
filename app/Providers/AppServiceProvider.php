<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL; // Importer la classe URL
use Illuminate\Support\Facades\Vite;
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
        // Forcer HTTPS uniquement en production
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // Précharger les assets avec Vite
        Vite::prefetch(concurrency: 3);
    }
}
