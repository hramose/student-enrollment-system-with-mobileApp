<?php 

namespace App\Admin;
use Illuminate\Http\Request;
use App\Student;
use App\Scholar;
use App\Insurance;

class AddStudent {

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function insertStudent(){
		$student = new Student;
		$student->id = $this->request['std_id'];
		$student->f_name = $this->request['f_name'];
		$student->m_name = $this->request['m_name'];
		$student->l_name = $this->request['l_name'];
		$student->dob  = $this->request['dob'];
		$student->email = $this->request['email'];
		$student->contact = $this->request['contact'];
		$student->address  = $this->request['address'];
		$student->standing_id = $this->request['status'];
		$student->course_id = $this->request['course'];
		$student->save();

		
		$scholar = new Scholar;
		$scholar->scholar = $this->request['scholar_name'];
		$scholar->scholar_amount = $this->request['scholar_amount'];
		$scholar->student_id = $this->request['std_id'];
		$scholar->save();

		$insurance = new Insurance;
		$insurance->insurance = $this->request['insurance_name'];
		$insurance->insurance_amount = $this->request['insurance_amount'];
		$insurance->Insurance_capacity = $this->request['insurance_capacity'];
		$insurance->student_id = $this->request['std_id'];
		$insurance->save();

	}
}