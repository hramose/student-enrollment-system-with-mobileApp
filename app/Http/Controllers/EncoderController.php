<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
