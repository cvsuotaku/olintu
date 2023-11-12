<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Rules\UniqueUsername;

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
        $userType = $request->input('user_type');

        try {
            $validatedData = $this->validateUserForm($request, $userType);
            DB::beginTransaction();
            if($userType === 'professor') {
                // Create a new professor record
                Professor::create([
                    'USERNAME' => $request->input('username'),
                    'PASSWORD' => Hash::make($request->input('password')),
                    'FIRST_NAME' => $request->input('first_name'),
                    'MIDDLE_NAME' => $request->input('middle_name'),
                    'LAST_NAME' => $request->input('last_name'),
                ]);
            } else if($userType === 'student') {
                // Create a new student record
                Student::create([
                    'STUDENT_NUMBER' => $request->input('student_number'),
                    'USERNAME' => $request->input('username'),
                    'PASSWORD' => Hash::make($request->input('password')),
                    'FIRST_NAME' => $request->input('first_name'),
                    'MIDDLE_NAME' => $request->input('middle_name'),
                    'LAST_NAME' => $request->input('last_name'),
                ]);
            }
            DB::commit();
            // Redirect the user after registration
            return redirect('/')->with('success', 'Registration successful. You can now log in.');
        } catch (ValidationException $e) {
            DB::rollBack();
            return back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Validate professor or student form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $userType  The type of user ('professor' or 'student')
     * @return array
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateUserForm(Request $request, $userType)
    {
        // Additional check for valid user types
        if (!in_array($userType, ['professor', 'student'])) {
            throw ValidationException::withMessages(['user_type' => 'Invalid user type']);
        }
        
        $rules = [
            'username' => ['required', 'string', 'min:8', 'max:45', new UniqueUsername],
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'first_name' => ['required', 'string', 'max:45'],
            'middle_name' => ['string', 'max:45'],
            'last_name' => ['required', 'string', 'max:45'],
        ];

        if ($userType === 'student') {
            $rules['student_number'] = [
                'required',
                'string',
                'min:8',
                'max:45',
                Rule::unique('TBL_STUDENT', 'student_number'),
            ];
        }

        return $request->validate($rules);
    }

}
