<?php 

namespace App\Admin;
use Illuminate\Http\Request;

class AddStudent {

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}
}