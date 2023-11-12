<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Hash;

class ProfessorUserProvider extends EloquentUserProvider
{
    public function __construct($hasher, $model)
    {
        parent::__construct($hasher, $model);
    }

     /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials($user, array $credentials)
    {
        return $user->getAuthIdentifier() === $credentials['username'] &&
        Hash::check($credentials['password'], $user->getAuthPassword());
    }
}
