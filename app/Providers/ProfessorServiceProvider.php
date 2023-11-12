<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth; 

class ProfessorServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Auth::provider('professors', function ($app, array $config) {
            return new ProfessorUserProvider($app['hash'], $config['model']);
        });
    }
}
