<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RecordsController extends Controller
{
    public function index()
    {

        $studentId = Auth::guard('STUDENT_NUMBER');
        dd($studentId);
        $grades = Grade::where('STUDENT_ID', $studentId)->get();

        

        Log::info($grades);
        return view('records');

        
    }

    // RecordsController.php



    //public function showRecords()
    //{
        

       // return view('records', compact('grades'));
    //}




}