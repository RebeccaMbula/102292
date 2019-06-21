<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
    public function payFees(Request $request){
    	$request->validate([
    		'sid' => 'required|exists:students,id',
    		'fpaid' => 'required'
    	]);

    	$sid = $request->input('sid');
    	$fpaid = $request->input('fpaid');

    	$fees = new Fees();
    	$fees->sid = $sid;
    	$fees->amount = $fpaid;///
    	$fees->save();

        return response()->view('LandingPage', ['message' => "Fees was paid successfully!"]);
    
    }

    public function itsgonnadowork(Request $request) {
        $fee_payments=[];
        if($request->input('studentID')!=NULL){
            $student = Student::find($request->input('studentID'));
            if($student != NULL) {
                $fee_payments = $student->fees()->get();
            
            }
        }

        return response()->view('102292.installments', ['fee_payments' => $fee_payments]);
    }


}
