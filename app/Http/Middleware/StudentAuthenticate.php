<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the user is authenticated as a student
         $student = Session::get('user');
         $isAuthenticated = Session::get('check');
         
        //  dd($isAuthenticated);
        // dd($request->session()->all());
         if ($isAuthenticated) {
            return $next($request);
        }

        // If not authenticated as a student, redirect to login or perform other actions
        return redirect('/login')->with('error', 'Unauthorized. Please log in as a student.');
        // return $next($request);
    }
}
