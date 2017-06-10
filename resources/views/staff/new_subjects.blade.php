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
				  <li role="presentation"><a href="{{route('staff_main')}}"><i class="glyphicon glyphicon-home pull-right"></i>Dashboard</a></li>
				  
				  <li role="presentation" class="active"><a href="{{route('staff_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('staff_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Teachers Subjects</h2>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li role="presentation"><a href="{{route('staff_subjects')}}">List</a></li>
						  <li role="presentation" class="active"><a href="{{route('staff_subjects_new')}}">New</a></li>
						  
						</ul>

						<div>
							<form class="form-horizontal" role="form" action="#" method="POST">

								<div class="col-md-6">
									<div class="form-group {{$errors->has('subject_code') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="email">Subject Code:</label>
									    <div class="col-md-9">
									      <input type="text" class="form-control" name="subject_code" >
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('subject_desc') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="email">Description:</label>
									    <div class="col-md-9">
									      <input type="text" class="form-control" name="subject_desc">
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('start') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="email">Time Start:</label>
									    <div class="col-md-9">
									      <input type="time" class="form-control" name="start" >
									    </div>
									 </div>
									 <div class="form-group {{$errors->has('end') ? 'has-error' : ''}}">
									    <label class="control-label col-md-3" for="email">Time End:</label>
									    <div class="col-md-9">
									      <input type="time" class="form-control" name="end" >
									    </div>
									 </div>

									 <div class="form-group">
									 	<div class="col-md-9 col-md-offset-3">
									 		<button type="submit" class="btn btn-success">Submit</button>
									 		<button type="button" class="btn btn-danger">Clear</button>
									 	</div>
									 </div>
									 {{csrf_field()}}
								</div>	


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