<?php 

namespace App\Admin;

use Illuminate\Http\Request;
use App\Standing;

class AddStanding {

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function insertStanding(){
		$standing = new Standing;
		$standing->standing = $this->request['standing'];
		$standing->save();
		return true;
	}
}