<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Professor extends Model implements Authenticatable
{
    use AuthenticatableTrait, HasApiTokens, HasFactory;

    protected $table = 'TBL_PROFESSOR';
    protected $primaryKey = 'PROFESSOR_ID';
    protected $guard = "professor";
    public $timestamps = true;

    protected $fillable = [
        'PROFESSOR_ID',
        'USERNAME',
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'PASSWORD',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->PROFESSOR_ID = Str::uuid();
        });
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->PASSWORD;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifier()
    {
        return $this->USERNAME;
    }
}
