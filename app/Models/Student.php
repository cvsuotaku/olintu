<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Student extends Model
{
    use HasFactory;
    protected $table = 'TBL_STUDENT';
    protected $primaryKey = 'STUDENT_ID';

    protected $fillable = [
        'STUDENT_ID',
        'USERNAME',
        'STUDENT_NUMBER',
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'PASSWORD',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->STUDENT_ID = Str::uuid();
        });
    }

    public $timestamps = true;
}
