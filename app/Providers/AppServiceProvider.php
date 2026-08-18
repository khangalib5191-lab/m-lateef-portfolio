<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Force all generated URLs, routes, and form actions to HTTPS on Vercel
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        } else {
            URL::forceScheme('https'); // Force HTTPS globally for production
        }
    }
}