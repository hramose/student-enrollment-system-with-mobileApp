<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
	 public function __construct(){
        $this->middleware('admincheck');
    }   

    public function main(){
    	return view('admin.main');
    } 

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function teachers(){
        return view('admin.teachers');
    }

    public function students(){
        return view('admin.students');
    }

    public function subjects(){
        return view('admin.subjects');
    }
}
