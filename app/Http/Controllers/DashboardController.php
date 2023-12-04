<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function validateSession() {
        if(Session::get('user') != null) {
            return redirect()->route('student.dashboard');
        } else {
            return redirect()->route('guest');
        }
    }
}
