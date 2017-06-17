<?php 

namespace App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;

class AddDepartment {

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function addDepartment(){
	
		$department = new Department;
		$department->department = $this->request['department'];
		$department->save();
		return true;
	}
}