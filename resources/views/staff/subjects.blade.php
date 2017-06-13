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
						@if(Session::has('info'))
							<div class="alert alert-info">
								{{Session::get('info')}}
							</div>
						@endif
						<ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a href="{{route('staff_subjects')}}">List</a></li>
						  <li role="presentation"><a href="{{route('staff_subjects_new')}}">New</a></li>
						  
						</ul>

						<div>
							<table class="table table-striped">
								<thead>
									<tr class="info">
										<th>User</th>
										<th>Subject Code</th>
										<th>Description</th>
										<th>Time</th>
										<th>Operations</th>
									</tr>
								</thead>
								<tbody>
									@if($subjects->count())
										@foreach($subjects as $subject)
											<tr class="{{$subject->status_id == 1 ? 'success' : 'danger'}}">
												<td>{{$subject->user->lastname}}, {{$subject->user->firstname}}</td>
												<td>{{$subject->subject_code}}</td>
												<td>{{$subject->description}}</td>
												<td>{{$subject->schedule->schedules}}</td>
												<td>
													<a href="#" class="btn btn-danger btn-xs">Closed</a>
													<a href="#" class="btn btn-success btn-xs">Open</a>
												</td>
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