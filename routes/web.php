<?php

use App\User;
use App\Role;
use App\Status;

Route::get('/', function(){
	return redirect()->route('login');
});

Route::group(['prefix'=> 'auth'], function(){
	Route::get('/login', [
		'as'=> 'login',
		'uses'=> 'AuthController@login'
	]);
	Route::post('/login', [
		'as'=> 'loginCheck',
		'uses'=> 'AuthController@loginCheck'
	]);
	Route::get('/register', [
		'as'=> 'register',
		'uses'=> 'AuthController@register'
	]);
});

Route::group(['prefix'=> 'admin'], function(){
	Route::get('/main', [
		'as'=> 'admin_main',
		'uses'=> 'AdminController@main'
	]);
});

Route::group(['prefix'=> 'staff'], function(){
	Route::get('/main', [
		'as'=> 'staff_main',
		'uses'=> 'Staffcontroller@main'
	]);
});

// Route::get('/userAdd', function(){
// $user = new User;
// $user->username = 'admin123'; 
// $user->email = 'email@yahoo.com';
// $user->password = bcrypt('admin123');
// $user->role_id = 1;
// $user->status_id = 1;
// $user->firstname = "morls";
// $user->middlename = "pogi";
// $user->lastname = "ako";
// $user->contact = "000000000000";
// $user->address = "quezon city";
// $user->save();
// });

// Route::get('/addRole', function(){
// 	$role = new Role;
// 	$role->roles = "staff"; 
// 	$role->save();
// });

// Route::get('/addStatus', function(){
// 	$status = new Status;
// 	$status->status= "deactivated"; 
// 	$status->save();
// });
