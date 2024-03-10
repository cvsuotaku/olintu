<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $table = 'tbl_question';
    protected $primaryKey = 'question_id';
    public $timestamps = false; // If you don't have timestamps (created_at, updated_at) columns

    // Define the fillable fields if needed
    protected $fillable = [
        'lessonId',
        'type',
        'question',
        'answer',
    ];

    public static function getByLessonId($lesson_id)
    {
        return self::where('lessonId', $lesson_id)->get();
    }

}
