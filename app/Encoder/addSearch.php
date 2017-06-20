<?php 

namespace App\Encoder;

use Illuminate\Http\Request;
use App\Student;

class AddSearch {

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function searchStudent(){
		$searchItem =  $this->request['searchItem'];
		$student = Student::where('id', $searchItem)->first();
		if(!$student){
			return redirect()->back()->with('info', 'No Student Found in that ID');
		}
			
		return view('encoder.enroll.searchResult', compact('student'));		
		}
		

	
}

