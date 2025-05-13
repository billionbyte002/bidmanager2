<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Socialite\FreelancerProvider;
use Laravel\Socialite\Facades\Socialite;

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
        Socialite::extend('freelancer', function ($app) {
            $config = $app['config']['services.freelancer'];
            return Socialite::buildProvider(FreelancerProvider::class, $config);
        });
    }
}
