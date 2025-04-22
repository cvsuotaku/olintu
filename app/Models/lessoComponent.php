<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessoComponent extends Model
{
    use HasFactory;
    protected $table = 'tbl_component';
    
    protected $primaryKey = 'component_id';

    protected $fillable = [
        'lessonId',
        'type',
        'data',
    ];


}
