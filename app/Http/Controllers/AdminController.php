<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Charts;
use App\User;
use App\Admin\TeacherCheck;
use App\Admin\SubjectCheck;
use App\Subject;

class AdminController extends Controller
{
	 public function __construct(){
        $this->middleware('admincheck');
    }   

    public function main(){
         $user = User::all()->count();
         $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("Admin Chart Boards")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Teachers', [5,20,100])
            ->dataset('Students', [15,30,80])
            ->dataset('Subjects', [25,10,40])
           
            // Setup what the values mean
            ->labels(['2015', '2016', '2017']);

            $charts = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("Admin Chart Boards")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Teachers', [5,20,100])
            ->dataset('Students', [15,30,80])
            ->dataset('Subjects', [25,10,40])
            ->dataset('Online', [$user,$user,$user])
            // Setup what the values mean
            ->labels(['2015', '2016', '2017']);

       

    	return view('admin.main', ['chart'=> $chart, 'charts'=> $charts]);
    } 

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function teachers(){
        $users = User::where('role_id', 2)->get();
        return view('admin.teachers', compact('users'));
    }

    public function students(){
        return view('admin.students');
    }

    public function subjects(){
        $subjects = Subject::paginate(10);
        return view('admin.subjects', compact('subjects'));
    }

    public function new(){
        return view('admin.teacher.new');
    }

    public function new_teacher(TeacherCheck $new_teacher){
         $new_teacher->check();
         return redirect()->route('admin_teachers')->with('info', 'Teachers Successfully Added');

    }
    

    public function search(){
        return view('admin.teacher.search');
    }

    public function subjects_new(){
        return view('admin.subject.new');
    }

    public function subjects_check(SubjectCheck $subject){
        $subject->check();

        return redirect()->route('admin_subjects')->with('info', 'Subjects Successfully Added');
    }
}
