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
				  <li role="presentation" ><a href="{{route('encoder_main')}}"><i class="glyphicon glyphicon-home pull-right"></i>Dashboard</a></li>
				  
				  <li role="presentation" class="active"><a href="{{route('encoder_enroll')}}"><i class="glyphicon glyphicon-book pull-right"></i>Enroll</a></li>
				  <li role="presentation"><a href="{{route('encoder_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Final Step for Enrolling</h2>
					</div>
					<div class="panel-body">
						@if(Session::has('info'))
							<div class="alert alert-info">{{Session::get('info')}}</div>
						@endif
						<div class="row">
							<div class="col-md-6">
								<h2>Student Information</h2>
								<h4>Name: {{$student->l_name}}, {{$student->f_name}} {{$student->m_name}}</h4>
								<h4>Department & Course: {{$student->course->course}}</h4>
								<h4>Status:{{$student->standing->standing}}</h4>
								<h4>Email: {{$student->email}}</h4>
								<h4>Contact: {{$student->contact}}</h4>
								<h4>Address: {{$student->address}}</h4>
							</div>
							<div class="col-md-6">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label>Student Year: </label>
										<select class="form-control" name="year">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
										</select>
									</div>

									<div class="form-group">
										<label>School Year Ex: 2016-2017</label>
										<input type="text" name="school_year" class="form-control"> 
									</div>

									<div class="form-group">
										<label>School Semester</label>
										<select class="form-control" name="year">
											<option value="1">1st</option>
											<option value="2">2nd</option>
										</select>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-success">Load Subjects</button>
										<button type="button" class="btn btn-warning">Clear</button>
									</div>
								</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection