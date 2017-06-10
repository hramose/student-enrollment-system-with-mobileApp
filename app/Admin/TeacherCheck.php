<?php 


namespace App\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\User;

class TeacherCheck {
	use ValidatesRequests;
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function check(){
		$this->checkValidates();
		$this->newTeachers();
	}

	public function checkValidates(){
		$this->validate($this->request, [
			'username'=> 'required',
			'email' => 'required',
			'password' => 'required|max:12',
			'pass2' => 'required|max:12|same:password',
			
			'fname' => 'required',
			'mname' => 'required',
			'lname' => 'required',
			'contact' => 'required',
			'address' => 'required'
		]);

		return $this;
	}

	public function newTeachers(){
		
		$user = new User;
		$user->username = $this->request['username'];
		$user->email = $this->request['email'];
		$user->password = bcrypt($this->request['pass2']);
		$user->firstname = $this->request['fname'];
		$user->middlename = $this->request['mname'];
		$user->lastname = $this->request['lname'];
		$user->contact = $this->request['contact'];
		$user->address = $this->request['address'];
		$user->role_id = 2;
		$user->status_id = 2;
		$user->save();

		
	}

	


	
}