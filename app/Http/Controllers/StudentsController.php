<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function registerStudent(Request $request){
        // $request->validate([
        //     ''
        // ])

    	$name = $request->input('name');
    	$address = $request->input('address');
    	$dob = $request->input('dob');

    	$student = new Student();
    	$student->name = $name;
    	$student->address = $address;
    	$student->dob = $dob;
    	$student->save();

        return response()->view('LandingPage', ['message' => "Student was registered successfully!"]);
    }


     public function view() {
        $records = Student::all()->transform(function ($student, $key) {
            $student['fees_total'] = $student->fees()->get()->pluck('amount')->sum();
            return $student;

        });

        return view('student-total-fees',['records' => $records]);
    }
}
