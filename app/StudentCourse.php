<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function status(){
    	return $this->belongsTo('App\Standing');
    }
}
