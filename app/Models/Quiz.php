<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'tbl_quiz';
    protected $primaryKey = 'quiz_id';
    public $timestamps = false; // If you don't have timestamps (created_at, updated_at) columns

    // Define the fillable fields if needed
    protected $fillable = [
        'topic',
        'question',
        'answer',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
    ];

    /**
     * Get quizzes by topic.
     *
     * @param int $topic
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getByTopic($topic)
    {
        return self::where('topic', $topic)->get();
    }
}
