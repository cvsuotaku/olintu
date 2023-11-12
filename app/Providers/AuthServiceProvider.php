<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('professor', function ($app, array $config) {
            return new ProfessorServiceProvider($app['hash'], $config['model']);
        });

        Auth::provider('student', function ($app, array $config) {
            return new StudentServiceProvider($app['hash'], $config['model']);
        });
    }
}
