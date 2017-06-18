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
				  <li role="presentation" ><a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-education pull-right"></i>Students</a></li>
				  <li role="presentation"><a href="{{route('admin_departments')}}"><i class="glyphicon glyphicon-bookmark pull-right"></i>Department</a></li>
				  <li role="presentation"><a href="{{route('admin_subjects')}}"><i class="glyphicon glyphicon-book pull-right"></i>Subjects</a></li>
				  <li role="presentation" class="active"><a href="{{route('admin_students_status')}}"><i class="glyphicon glyphicon-map-marker pull-right"></i>Student Status</a></li>
				  <li role="presentation"><a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Student Statuses</h2>
					</div>
					<div class="panel-body">
						
						<div class="row">
							<div class="col-sm-8">
								<div>
									@if(Session::has('fail'))
										<div class="alert alert-danger">{{Session::get('fail')}}</div>
									@endif
									@if(Session::has('add'))
										<div class="alert alert-success">{{Session::get('add')}}</div>
									@endif
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Student Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@if($standings->count() > 0)
											@foreach($standings as $standing)
												<tr>
													<td>{{$standing->standing}}</td>
													<td>
														<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
														<a href="#" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
													</td>
												</tr>
											@endforeach
										@endif
									</tbody>
								</table>
							</div>
							<div class="col-sm-4">
								<h3>New Student Status</h3>
								<form action="{{route('admin_standing_check')}}" method="POST">
									<div class="form-group {{$errors->has('standing') ? 'has-error' : ''}}">
										<label>Student status: </label>
										<input type="text" name="standing" class="form-control" placeholder="{{$errors->has('standing') ? 'Enter student standing' : ''}}">
									</div>
									<div class="form-group ">
										<button type="submit" class="btn btn-info">Submit</button>

									</div>
									{{csrf_field()}}
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