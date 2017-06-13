@extends('template.default')

@section('styles')
<style type="text/css">
	.jumbotron{
		margin-bottom: 10px;
		border-radius: 0px !important;
	}
	.well{
		border-radius: 0px !important;
	}
	i {
		color: #e5bf37;
		font-size: 25px;
	}
</style>
@endsection

@section('contents')
	<div class="container">
		<div class="jumbotron">
			<h1 class="text-center">Student Enrollment System</h1>
		</div>
		<div>
			<div class="col-lg-3 well">
				<ul class="nav nav-pills nav-stacked row">
				  <li role="presentation"><a href="{{route('admin_main')}}"><i class="glyphicon glyphicon-home pull-right"></i>Dashboard</a></li>
				  <li role="presentation" class="active"><a href="{{route('admin_teachers')}}"><i class="glyphicon glyphicon-user pull-right"></i>Users</a></li>
				  <li role="presentation"><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-bookmark pull-right"></i>Department</a></li>
				  <li role="presentation"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Teachers List</h2>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li role="presentation"><a href="{{route('admin_teachers')}}">List</a></li>
						  <li role="presentation" class="active"><a href="{{route('admin_teachers_new')}}">New</a></li>
						  <li role="presentation"><a href="{{route('admin_teachers_search')}}">Search</a></li>
						</ul>

						<div>
							<form class="form-horizontal" role="form" action="{{route('admin_teacher_check')}}" method="POST">

								<div class="col-md-6">
									<div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="username">Username:</label>
									    <div class="col-md-9">
									      <input type="text" class="form-control" name="username" placeholder="Enter Username">
									     
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="email">Email:</label>
									    <div class="col-md-9">
									      <input type="text" class="form-control" name="email" placeholder="Enter email">
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="password">Password:</label>
									    <div class="col-md-9">
									      <input type="password" class="form-control" name="password" placeholder="Enter Password">
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('pass2') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="pass2">Repeat Password:</label>
									    <div class="col-md-9">
									      <input type="password" class="form-control" name="pass2" placeholder="Repeat Password">
									    </div>
									 </div>

									 <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="role">Roles:</label>
									    <div class="col-md-9">
									     	<select class="form-control" name="role">
									     		<option value="2">Teacher</option>
									     		<option value="3">Encoder</option>
									     	</select>
									    </div>
									 </div>
							 
							  
							 	</div>
							 

								<div class="col-sm-6">
									<div class="form-group {{$errors->has('fname') ? 'has-error' : ''}}">
									    <label class="control-label col-md-4" for="fname">First Name:</label>
									    <div class="col-md-8">
									      <input type="text" class="form-control" name="fname" placeholder="Enter First Name">

									    </div>
									 </div>
									 <div class="form-group {{$errors->has('mname') ? 'has-error' : ''}}">
									    <label class="control-label col-md-4" for="mname">Middle Name:</label>
									    <div class="col-md-8">
									      <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name">
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('lname') ? 'has-error' : ''}}">
									    <label class="control-label col-md-4" for="lname">Last Name:</label>
									    <div class="col-md-8">
									      <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('contact') ? 'has-error' : ''}}">
									    <label class="control-label col-md-4" for="contact">Contact:</label>
									    <div class="col-md-8">
									      <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
									    </div>
									 </div>
								</div>

								<div class="">
									<div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
										<label class="control-label col-md-offset-6">ADDRESS</label>
										<div class="col-md-12">
											<textarea class="form-control" name="address" rows="4"></textarea>
										</div>
									</div>
								</div>
							  
							  
								<div class="col-md-offset-5">
									<button type="submit" class="btn btn-success">Submit</button>
									<button type="button" class="btn btn-warning">Clear</button>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection