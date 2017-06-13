<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function schedule(){
    	return $this->belongsTo('App\Schedule');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
