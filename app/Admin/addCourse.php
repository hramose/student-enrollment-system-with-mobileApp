<?php 

namespace App\Admin;

use Illuminate\Http\Request;
use App\Department;
use App\StudentCourse;

class AddCourse{

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function insertCourse(){
		$id = $this->request['department'];

		$find = Department::findOrFail($id);
		$course = new StudentCourse;
		$course->course = $this->request['course'];
		$find->courses()->save($course);
		return true;

	}


}