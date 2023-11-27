<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function viewLogin(){
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
       if (Auth::guard('student')->attempt($credentials, $request->get('remember'))) {
            // Authentication passed for student
            Session::put('user', Auth::guard('student')->user());
            Session::put('check', Auth::guard('student')->check());
            return redirect()->intended('/student/dashboard');
        } else if (Auth::guard('professor')->attempt($credentials, $request->get('remember'))) {
            Session::put('user', Auth::guard('student')->user());
            Session::put('check', Auth::guard('student')->check());
            // Authentication passed for professor
            return redirect()->intended('/professor/dashboard');
        }
        // Authentication failed
        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
