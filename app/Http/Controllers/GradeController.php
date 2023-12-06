<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Grade;

class GradeController extends Controller
{
    public function loadGrade()
    {
        $grade = Grade::getById(Session::get('grade'));
        $question = Session::get('question');
        $answer = Session::get('answer');
        return view('grade', compact('grade', 'question', 'answer'));
    }
}
