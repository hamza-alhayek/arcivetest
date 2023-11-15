<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArchiveController extends Controller
{
    public function index(){
        return view("managerPage");
    }
    public function store(Request $request)
    {
        $archive = new \App\Models\Archive;
        
        $archive->Maincat = $request->input('Maincat');
        $archive->userid = Auth::user()->id;
        $archive->subject = $request->input('subject');
        $archive->keywords = $request->input('keyword');

        if($request->hasFile('filepath')){
            $file = $request->file('filepath');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/filepath/',$filename);
            $archive->filepath = $filename;
        }
        else{
            return $request;
        }
        $archive->save();

        return view("userPage");
    }
}
