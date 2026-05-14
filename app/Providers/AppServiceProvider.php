<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
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
        // Rate limit login attempts: 5 per minute per IP
        RateLimiter::for('login', function ($request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        // Rate limit registration: 3 per minute per IP
        RateLimiter::for('register', function ($request) {
            return Limit::perMinute(3)->by($request->ip());
        });

        // Rate limit contact form: 3 per minute per IP
        RateLimiter::for('contact', function ($request) {
            return Limit::perMinute(3)->by($request->ip());
        });

        // Rate limit general API: 60 per minute per IP
        RateLimiter::for('api', function ($request) {
            return Limit::perMinute(60)->by($request->ip());
        });
    }
}
