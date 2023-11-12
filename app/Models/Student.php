<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model implements Authenticatable
{
    use AuthenticatableTrait, HasApiTokens, HasFactory;
    
    protected $table = 'TBL_STUDENT';
    protected $primaryKey = 'STUDENT_ID';
    public $timestamps = true;
    protected $guard = "student";

    protected $fillable = [
        'STUDENT_ID',
        'USERNAME',
        'STUDENT_NUMBER',
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
            $model->STUDENT_ID = Str::uuid();
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
