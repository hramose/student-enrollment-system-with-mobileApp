<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\encoder\searchcheck;
use App\Encoder\addSearch;
use App\Student;
class EncoderController extends Controller
{
	public function __construct(){
		$this->middleware('encodercheck');
	}
    
    public function main(){
    	return view('encoder.main');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function enroll(){
        return view('encoder.enroll.enroll');
    }

   public function encoder_search(searchcheck $request, addSearch $search){
      return $search->searchStudent();
   }

   public function enroll_student($student_id){
    $student = Student::findorFail($student_id);
    if(!$student){
        return redirect()->back()->with('info', 'Invalid URL');
    }
    return view('encoder.enroll.student', compact('student'));
   }
}
