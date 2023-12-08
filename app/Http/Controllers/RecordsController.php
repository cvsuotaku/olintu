<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Support\Facades\Session;

class RecordsController extends Controller
{
    protected $grades;

    public function retrieveGrade()
    {
        $grades = Grade::getByStudentId(Session::get('user', [])['STUDENT_ID']);
        return view('records', compact('grades'));
    }
}
