<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

class StudentServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Auth::provider('students', function ($app, array $config) {
            return new StudentUserProvider($app['hash'], $config['model']);
        });
    }
}
    