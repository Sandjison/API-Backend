<?php

namespace App\Providers;

use App\Interfaces\AuthInterface;
use App\Respositories\AuthRespository;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      $this->app->bind(AuthInterface::class, AuthRespository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
