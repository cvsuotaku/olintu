<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\lsesson;
class StudentController extends Controller
{
    public function dashboard()
    {
        $lessons = lsesson::get();

        return view('dashboard',['lessons'=>$lessons]);
    }

}
