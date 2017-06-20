<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function scholar(){
    	return $this->hasOne('App\Scholar');
    }

    public function insurance(){
    	return $this->hasOne('App\Insurance');
    }

    public function course(){
    	return $this->belongsTo('App\StudentCourse');
    }
    public function standing(){
    	return $this->belongsTo('App\Standing');
    }
}
