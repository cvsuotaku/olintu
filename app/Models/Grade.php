<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'tbl_grade';

    protected $primaryKey = 'GRADE_ID';

    protected $fillable = [
        'GRADE_ID', 'STUDENT_ID', 'TOPIC', 'SCORE', 'PERCENTAGE', 'TAXONOMY_LEVEL', 'CREATED_AT'
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

    /**
     * Get grade by Student Id.
     *
     * @param string $studentId
     * @return
     */
    public static function getByStudentId($studentId)
    {
        return self::where('student_id', $studentId)->get();
    }
}

