<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lsesson extends Model
{
    use HasFactory;
    protected $table = 'tbl_lesson';
    
    protected $primaryKey = 'lessonId';
    // public $timestamps = false; // If you don't have timestamps (created_at, updated_at) columns

    // Define the fillable fields if needed
    protected $fillable = [
        'title',
    ];

    public function component(){
        return $this->hasMany(lessoComponent::class,'lessonId','lessonId');
    }
}
