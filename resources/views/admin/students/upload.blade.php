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
				  <li role="presentation" ><a href="{{route('admin_main')}}"><i class="glyphicon glyphicon-home pull-right"></i>Dashboard</a></li>
				  <li role="presentation"><a href="{{route('admin_teachers')}}"><i class="glyphicon glyphicon-user pull-right"></i>Users</a></li>
				  <li role="presentation" class="active"><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation"><a href="{{route('admin_departments')}}"><i class="glyphicon glyphicon-bookmark pull-right"></i>Department</a></li>
				  <li role="presentation"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('admin_students_status')}}"><i class="glyphicon glyphicon-map-marker pull-right"></i>Student Status</a></li>
				  <li role="presentation"><a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Students List</h2>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li role="presentation"><a href="{{route('admin_students')}}">List</a></li>
						  <li role="presentation" class="active"><a href="{{route('admin_students_upload')}}">New</a></li>
						  
						</ul>
						@if(Session::has('info'))
							<div class="alert alert-success">{{Session::get('info')}}</div>
						@endif
						<form class="form-horizontal" role="form" action="{{route('admin_students_uploadCheck')}}" method="POST">
						{{csrf_field()}}
						<div class="row">
							
							<div class="col-lg-6">
								
									<div class="form-group {{$errors->has('std_id') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="std_id">Student ID</label>
										<div class="col-sm-8">
											<input type="text" name="std_id" class="form-control" placeholder="{{$errors->has('std_id') ? 'Enter Student ID' : ''}}">
										</div>
									</div>
									<div class="form-group {{$errors->has('l_name') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="l_name">Last Name</label>
										<div class="col-sm-8">
											<input type="text" name="l_name" class="form-control">
										</div>
									</div>
									
									<div class="form-group {{$errors->has('f_name') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="f_name">First Name</label>
										<div class="col-sm-8">
											<input type="text" name="f_name" class="form-control">
										</div>
									</div>
									<div class="form-group {{$errors->has('m_name') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="m_name">Middle Name</label>
										<div class="col-sm-8">
											<input type="text" name="m_name" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('dob') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="f_name">Date of Birth</label>
										<div class="col-sm-8">
											<input type="date" name="dob" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="email">Email</label>
										<div class="col-sm-8">
											<input type="email" name="email" class="form-control">
										</div>
									</div>
									<div class="form-group {{$errors->has('contact') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Mobile#</label>
										<div class="col-sm-8">
											<input type="number" name="contact" class="form-control">
										</div>
									</div>
									<div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Address</label>
										<div class="col-sm-8">
											<textarea class="form-control" name="address"></textarea>
										</div>
									</div>
								
							</div>
							<div class="col-lg-6">


									<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" >Status</label>
										<div class="col-sm-8">
											<select class="form-control" name="status">
												@if($standings->count() > 0)
													@foreach($standings as $stand)
														<option value="{{$stand->id}}">{{$stand->standing}}</option>
													@endforeach
												@else
														<option>No Status Available</option>
												@endif
											</select>
										</div>
									</div>


									<div class="form-group {{$errors->has('course') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" >Course</label>
										<div class="col-sm-8">
											<select class="form-control" name="course">
												@if($courses->count() > 0)
													@foreach($courses as $course)
														<option value="{{$course->id}}">{{$course->course}}</option>
													@endforeach
												@else
													<option>No Course Available</option>
												@endif
											</select>
										</div>
									</div>

									<div class="form-group {{$errors->has('scholar_name') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Scholar</label>
										<div class="col-sm-8">
											<input type="text" name="scholar_name" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('scholar_amount') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Scholar Amount</label>
										<div class="col-sm-8">
											<input type="number" name="scholar_amount" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('insurance_name') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Insurance</label>
										<div class="col-sm-8">
											<input type="text" name="insurance_name" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('insurance_amount') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Insurance Amount</label>
										<div class="col-sm-8">
											<input type="number" name="insurance_amount" class="form-control">
										</div>
									</div>

									<div class="form-group {{$errors->has('insurance_capacity') ? 'has-error' : ''}}">
										<label class="control-label col-sm-4" for="contact">Insurance Cover in months</label>
										<div class="col-sm-8">
											<input type="number" name="insurance_capacity" class="form-control">
										</div>
									</div>
								
							</div>
									
						</div>
						
							<div >
								<center>
										<button type="submit" class="btn btn-success">Submit</button>
										<button type="button" class="btn btn-warning">Clear</button>
								</center>
								{{csrf_field()}}
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection