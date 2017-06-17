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
				  <li role="presentation"><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation" class="active"><a href="{{route('admin_departments')}}"><i class="glyphicon glyphicon-bookmark pull-right"></i>Department</a></li>
				  <li role="presentation"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Department and Course Form</h2>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li role="presentation" ><a href="{{route('admin_departments')}}">List</a></li>
						  <li role="presentation" class="active"><a href="{{route('admin_departments_new')}}">New</a></li>
						  
						</ul>
						<div>
							@if(Session::has('info'))
								<div class="alert alert-danger">{{Session::get('info')}}</div>
							@endif
							@if(Session::has('add'))
								<div class="alert alert-success">{{Session::get('add')}}</div>
							@endif
							@if(Session::has('fail'))
								<div class="alert alert-danger">{{Session::get('fail')}}</div>
							@endif
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Department</h2>
							<form action="{{route('admin_departments_check')}}" method="POST">
								<div class="form-group {{$errors->has('department') ? 'has-error' : ''}}">
									<label>Department Name</label>
									<input type="text" name="department" class="form-control" placeholder="{{$errors->has('department') ? 'Enter Department Name' : ''}}">
								</div>
								<button type="submit" class="btn btn-primary" style="margin-top: 70px">Submit</button>
								{{csrf_field()}}
							</form>
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Courses</h2>
							<form action="{{route('admin_courses_check')}}" method="POST">
								<div class="form-group ">
									<label>Choose Department</label>
									<select name="department" class="form-control">
										@if($departments->count() > 0)
											@foreach($departments as $department)
												<option value="{{$department->id}}">{{$department->department}}</option>
											@endforeach
										@else:
											<option>No Department Available</option>
										@endif
									</select>
								</div>
								<div class="form-group {{$errors->has('course') ? 'has-error' : ''}}">
									<label>Course</label>
									<input type="text" name="course" class="form-control" placeholder="{{$errors->has('course') ? 'Enter Course Name' : ''}}">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
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