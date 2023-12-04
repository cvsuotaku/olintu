<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IdeController extends Controller
{
    public function loadCode(Request $request) {
        $topic = $request->input('topic');
        $exercise = $request->input('exercise');

        $filePath = public_path('/code/' . $topic . '/' . $exercise . '.txt');
        $fileContents = File::get($filePath);
        return view('ide', compact('fileContents'));
    }
}
