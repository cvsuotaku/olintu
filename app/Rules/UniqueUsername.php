<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueUsername implements Rule
{
    public function passes($attribute, $value)
    {
        // Check uniqueness in both professor and student tables
        $studentExists = DB::table('TBL_STUDENT')->where('username', $value)->exists();

        // The username should be unique if it doesn't exist in either table
        return !$studentExists;
    }

    public function message()
    {
        return 'Username already taken.';
    }
}
