<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('staff.subjects');
    }
}
