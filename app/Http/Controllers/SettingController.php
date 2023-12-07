<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function updateAccount(Request $request)
    {
        try {
            $isStudent  = Session::get('user') != null;
            if ($isStudent) {
                $this->validateUserForm($request);
                DB::beginTransaction();
                // Create a new student record
                $student = Session::get('user');
                $student->update(['PASSWORD' => Hash::make($request->input('password')),]);
                DB::commit();
                // Redirect the user after registration
                return back()->with('success', 'Settngs updated.');
            } else {
                return back()->with('info', 'Guest not allowed in settings.');
            }
        } catch (ValidationException $e) {
            DB::rollBack();
            return back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Validate settings form;
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateUserForm(Request $request)
    {
        $rules = [
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'confirm_password' => ['required', 'string', 'min:8', 'max:255'],
        ];

        return $request->validate($rules);
    }
}
