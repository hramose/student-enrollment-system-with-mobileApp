<?php 

namespace App\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Subject;
use App\Schedule;
use Illuminate\Support\Facades\Auth;
class SubjectCheck {
	use ValidatesRequests;
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function check(){
		$this->subjectValidates();
		$this->subjectInsert();
	}

	public function subjectValidates(){
		$this->validate($this->request, [
			'subject_code'=> 'required',
			'subject_desc' => 'required',
			'start' => 'required',
			'end' => 'required'
		]);
		return $this;
	}

	public function subjectInsert(){
		$sched = new Schedule;
		$sched->schedules = $this->request['start'].' - '. $this->request['end'];
		$sched->save();

		$find = Schedule::find($sched->id);
		$subject = new Subject;
		$subject->subject_code = $this->request['subject_code'];
		$subject->description = $this->request['subject_desc'];
		$subject->user_id = Auth::id();
		$subject->status_id = 1;
		$find->subjects()->save($subject);

		

	}

}