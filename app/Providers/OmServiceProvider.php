<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      $this->app->bind('App\Service\OmserviceInterface','App\Service\OmService');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
