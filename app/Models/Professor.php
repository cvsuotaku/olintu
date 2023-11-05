<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'TBL_PROFESSOR';
    protected $primaryKey = 'PROFESSOR_ID';

    protected $fillable = [
        'PROFESSOR_ID',
        'USERNAME',
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'PASSWORD',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->PROFESSOR_ID = Str::uuid();
        });
    }

    public $timestamps = true;

}
