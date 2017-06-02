<?php 

namespace App;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MorlValidates{

use ValidatesRequests;
protected $request;


	public function __construct(Request $request){
		$this->request = $request;
	}

	public function loginCheck(){
		$this->validates();
		$username = $this->request['username'];
		$password = $this->request['password'];
		if(Auth::attempt(['username'=> $username, 'password'=> $password])){
			return true;
		}else{
			return false;
		}

		
	}

	public function validates(){
		$this->validate($this->request, [
			'username'=> 'required|max:12',
			'password'=> 'required|max:12'
		]);

		return $this;

	}

	public function checkStatus(){
        if(Auth::user()->status_id == 2){
            return false;
        }else{
            return true;
        }
    }

    public function checkRoles(){
        if(Auth::user()->role_id == 1){
            return redirect()->route('admin_main');
        }else if(Auth::user()->role_id == 2){
            return redirect()->route('staff_main');
        }else if(Auth::user()->role_id == 3){
            return redirect()->route('admin_main');
        }
        

    }

}