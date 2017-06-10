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
				  <li role="presentation"><a href="{{route('admin_teachers')}}"><i class="glyphicon glyphicon-user pull-right"></i>Teacher</a></li>
				  <li role="presentation"><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation" class="active"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation"><a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Subject List</h2>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a href="{{route('admin_subjects')}}">List</a></li>
						  <li role="presentation"><a href="{{route('admin_subjects_new')}}">New</a></li>
						  <li role="presentation"><a href="#">Search</a></li>
						</ul>

						<div>
							@if(Session::has('info'))
								<div class="alert alert-success">
									{{Session::get('info')}}
								</div>
							@endif
							<table class="table table-striped">
								<thead>
									<tr class="info">
										<th>Subject Code</th>
										<th>Description</th>
										<th>Time</th>
										
										
									</tr>
								</thead>
								<tbody>
									@if($subjects->count())
										@foreach($subjects as $subject)
											<tr>
												<td>{{$subject->subject_code}}</td>
												<td>{{$subject->description}}</td>
												<td>{{$subject->schedule->schedules}}</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>

							{{$subjects->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection