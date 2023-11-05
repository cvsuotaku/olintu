<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
       /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate professor form
        $validatedProfessorData = $request->validate([
            'username' => ['required', 'string', 'min:8', 'max:45', Rule::unique(['TBL_PROFESSOR','TBL_STUDENT'], 'username')],
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'first_name' => ['required', 'string', 'max:45'],
            'middle_name' => ['string', 'max:45'],
            'last_name' => ['required', 'string', 'max:45'],
        ]);

        // Validate student form
        $validatedStudentData = $request->validate([
            'student_number' => ['required', 'string', 'min:8', 'max:45', Rule::unique(['TBL_STUDENT','TBL_PROFESSOR'], 'student_number')],
            'username' => ['required', 'string', 'min:8', 'max:45', Rule::unique('TBL_STUDENT', 'username')],
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'first_name' => ['required', 'string', 'max:45'],
            'middle_name' => ['string', 'max:45'],
            'last_name' => ['required', 'string', 'max:45'],
        ]);

        if($request->user_type == 'professor') {
            // Create a new professor record
            Professor::create([
                'USERNAME' => $validatedProfessorData['username'],
                'PASSWORD' => Hash::make($validatedProfessorData['password']),
                'FIRST_NAME' => $validatedProfessorData['first_name'],
                'MIDDLE_NAME' => $validatedProfessorData['middle_name'],
                'LAST_NAME' => $validatedProfessorData['last_name'],
            ]);
        } else if($request->user_type == 'student') {
             // Create a new student record
             Student::create([
                'STUDENT_NUMBER' => $validatedStudentData['student_number'],
                'USERNAME' => $validatedStudentData['username'],
                'PASSWORD' => Hash::make($validatedStudentData['password']),
                'FIRST_NAME' => $validatedStudentData['first_name'],
                'MIDDLE_NAME' => $validatedStudentData['middle_name'],
                'LAST_NAME' => $validatedStudentData['last_name'],
            ]);
        }
        

        // Redirect the user after registration
        return redirect('/')->with('success', 'Registration successful. You can now log in.');
    }
}
