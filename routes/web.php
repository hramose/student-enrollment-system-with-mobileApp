<?php

use App\User;
use App\Role;
use App\Status;
use App\Standing;

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
		Route::get('/logout',[
			'as'=> 'admin_logout',
			'uses'=> 'AdminController@logout'
		]);
		Route::get('/teachers', [
			'as'=> 'admin_teachers',
			'uses'=> 'AdminController@teachers'
		]);
		Route::get('/students', [
			'as'=> 'admin_students',
			'uses'=> 'AdminController@students'
		]);
		Route::get('/students/upload', [
			'as'=> 'admin_students_upload',
			'uses'=> 'AdminController@students_upload'
		]);
		Route::post('students/upload', [
			'as'=> 'admin_students_uploadCheck',
			'uses'=> 'AdminController@students_uploadCheck'
		]);
		Route::get('/subjects', [
			'as'=> 'admin_subjects',
			'uses'=> 'AdminController@subjects'
		]);
		Route::get('/teachers/new', [
			'as'=> 'admin_teachers_new',
			'uses'=> 'AdminController@new'
		]);
		Route::post('/teachers/new', [
			'as'=> 'admin_teacher_check',
			'uses'=> 'AdminController@new_teacher'
		]);
		Route::get('/teachers/search', [
			'as'=> 'admin_teachers_search',
			'uses'=> 'AdminController@search'
		]);
		Route::get('/subjects/new', [
			'as'=> 'admin_subjects_new',
			'uses'=> 'AdminController@subjects_new'
		]);
		Route::post('/subjects/new', [
			'as'=> 'admin_subject_check',
			'uses'=> 'AdminController@subjects_check'
		]);

		Route::get('/department', [
			'as'=> 'admin_departments',
			'uses'=> 'AdminController@departments'
		]);

		Route::get('/department/new', [
			'as'=> 'admin_departments_new',
			'uses'=> 'AdminController@departments_new'
		]);

		Route::post('/department', [
			'as'=> 'admin_departments_check',
			'uses'=> 'AdminController@departments_check'
		]);

		Route::post('/course', [
			'as'=> 'admin_courses_check',
			'uses'=> 'AdminController@courses_check'
		]);
		Route::get('/status', [
			'as'=> 'admin_students_status',
			'uses'=> 'AdminController@students_status'
		]);
		Route::post('/status', [
			'as'=> 'admin_standing_check',
			'uses'=> 'AdminController@standing_check'
		]);
});

Route::group(['prefix'=> 'staff'], function(){
		Route::get('/main', [
			'as'=> 'staff_main',
			'uses'=> 'Staffcontroller@main'
		]);
		Route::get('/logout', [
			'as'=> 'staff_logout',
			'uses'=> 'Staffcontroller@logout'
		]);
		Route::get('/subjects', [
			'as'=> 'staff_subjects',
			'uses'=> 'Staffcontroller@subjects'
		]);
		Route::get('/subject/new', [
			'as'=> 'staff_subjects_new',
			'uses'=> 'Staffcontroller@subjects_new'
		]);
		Route::post('/subject/new', [
			'as'=> 'staff_subject_check',
			'uses'=> 'Staffcontroller@subject_check'
		]);

});

Route::group(['prefix'=> 'encoder'], function(){
		Route::get('/main', [
			'as'=> 'encoder_main',
			'uses'=> 'EncoderController@main'
		]);	
		Route::get('/logout', [
			'as'=> 'encoder_logout',
			'uses' => 'EncoderController@logout'
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

