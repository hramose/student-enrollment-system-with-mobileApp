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
	.panel-body div form {
		margin-top: 5%;
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
				  <li role="presentation" class="active"><a href="{{route('admin_teachers')}}"><i class="glyphicon glyphicon-user pull-right"></i>Teacher</a></li>
				  <li role="presentation"><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('admin_students_status')}}"><i class="glyphicon glyphicon-map-marker pull-right"></i>Student Status</a></li>
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
						  <li role="presentation" ><a href="{{route('admin_teachers_new')}}">New</a></li>
						  <li role="presentation" class="active"><a href="{{route('admin_teachers_search')}}">Search</a></li>
						</ul>

						<div>
							<form class="form-horizontal" role="form">
							  <div class="form-group">
							    <label class="control-label col-sm-3" for="search">Search:</label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" name="search" placeholder="Enter Search">
							    </div>
							  </div>
							  <div class="form-group">
							  	<div class="col-md-6 col-md-offset-3">
							  		<button type="submit" class="btn btn-primary">Search</button>
							  	</div>
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