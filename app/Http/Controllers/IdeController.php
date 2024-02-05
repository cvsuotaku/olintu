<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IdeController extends Controller
{
    public function loadCode(Request $request) {
        $title = $request->input('title');
        $filePath = storage_path('/app/' . $title. '.txt');
        $fileContents = File::get($filePath);
        return view('ide', compact('fileContents'));
        
    }
}
