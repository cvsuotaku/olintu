<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Student as modelStudent;


class accountManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $students = modelStudent::paginate(10);
        return view('accountManagement',['studentList'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = modelStudent::where('STUDENT_ID',$id)->first();
        return view('accountEdit',['student'=>$student]);
    }
    public function updateUsername($id = null , Request $request){
        // dd($request->all());
        $student = modelStudent::where('STUDENT_ID',$id)->first();
        $input = $request->all();
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
        ]);

        $student->USERNAME = $input['username'];
        $student->save();
        return redirect()->route('account_edit',[$id])->with(['success'=>'The username have been update successfully']);
    }

    public function updateUserData($id = null , Request $request){
        $student = modelStudent::where('STUDENT_ID',$id)->first();
        $input = $request->all();
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'snum' => ['required', 'string', 'max:255'],
        ]);
        $student->FIRST_NAME = $input['fname'];
        $student->MIDDLE_NAME = $input['mname'];
        $student->LAST_NAME = $input['lname'];
        $student->STUDENT_NUMBER  = $input['snum'];
        $student->save();
        return redirect()->route('account_edit',[$id])->with(['successinfo'=>'The student Info have been update successfully']);
    }

    public function resetPassword($id = null){
        $password = Hash::make("password_123");
        // dd($password);
        $student = modelStudent::where('STUDENT_ID',$id)->first();
        $student->PASSWORD = $password;
        $student->save();
        return redirect()->route('account_managementss')->with(['successdelete'=>'The student Password have been reset successfully']);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id = null)
    {
        // dd('click');
        $student = modelStudent::where('STUDENT_ID',$id)->first();
        $student->delete();
        return redirect()->route('account_managementss')->with(['successdelete'=>'The student Info have been deleted successfully']);
    }
}
