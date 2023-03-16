<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('crud.index');
    }
    public function student_process(Request $req)
    {
       //return $req->std_name;

        Student::create([
            'std_name' => $req->std_name,
            'std_email' => $req->email,
            'std_phone' => $req->std_phone,
            'std_address' => $req->std_address,
        ]);

        return back();


    }

    public function student_view()
    {

        $student = Student::all();
        return view('crud.view',compact('student'));
    }
}
