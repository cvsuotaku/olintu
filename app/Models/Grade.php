<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'tbl_grade';

    protected $primaryKey = 'GRADE_ID';

    protected $fillable = [
        'GRADE_ID', 'STUDENT_ID', 'TOPIC', 'SCORE', 'PERCENTAGE', 'CREATED_AT'
    ];

    /**
     * Get grade by Id.
     *
     * @param string $id
     * @return
     */
    public static function getById($id)
    {
        return self::where('grade_id', $id)->first();
    }
}

