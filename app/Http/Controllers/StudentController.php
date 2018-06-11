<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show(){

        return view('Idah.student');
    }

    public function save(){

        $student = new Student();

        $student->student_number=request('student_number');
        $student->FullName=request('FullName');
        $student->DateofBirth=request('DateofBirth');
        $student->Address=request('Address');

        $student->save();

        return Redirect('/');
    }
}
