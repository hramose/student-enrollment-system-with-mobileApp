<?php

namespace App\Http\Controllers;

use App\morlValidates;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
   

    public function login(){
    	return view('auth.login');
    }
    public function loginCheck(morlValidates $user){
    	//class injection
        if(!$user->loginCheck()){
    	   return redirect()->back()->with('info', 'Invalid Username/Password');
        }
        if(!$user->checkStatus()){
            return 'account is deactivated';
        }

       return $user->checkRoles();
    	

    }
    public function register(){
    	return view('auth.register');
    }

    
}
