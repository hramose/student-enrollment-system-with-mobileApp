<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function courses(){
    	return $this->hasMany('App\StudentCourse');
    }
}
