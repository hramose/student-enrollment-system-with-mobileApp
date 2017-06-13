<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Staff\SubjectCheck;
use App\Subject;

class Staffcontroller extends Controller
{
    public function __construct(){
    	$this->middleware('staffcheck');
    }

    public function main(){
    	return view('staff.main');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function subjects(){
        $subjects = Subject::where('user_id', Auth::id())->paginate(10);
        return view('staff.subjects', compact('subjects'));
    }

    public function subjects_new(){
        return view('staff.new_subjects');
    }

    public function subject_check(SubjectCheck $subject){
        $subject->check();

        return redirect()->route('staff_subjects')->with('info', 'Subject Successfully Added!');
    }
}
