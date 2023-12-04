<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Grade;

class GradeController extends Controller
{
    public function loadGrade()
    {
        $grade = Grade::getById(Session::get('grade'));

        return view('grade', compact('grade'));
    }
}
