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
				  <li role="presentation"><a href="{{route('admin_departments')}}"><i class="glyphicon glyphicon-bookmark pull-right"></i>Department</a></li>
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
						@if(Session::has('info'))
							<div class="alert alert-success">{{Session::get('info')}}</div>
						@endif
						<ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a href="{{route('admin_teachers')}}">List</a></li>
						  <li role="presentation"><a href="{{route('admin_teachers_new')}}">New</a></li>
						  <li role="presentation"><a href="{{route('admin_teachers_search')}}">Search</a></li>
						</ul>

						<div>
							<table class="table table-striped">
								<thead>
									<tr class="info">
										<th>Username</th>
										<th>Roles</th>
										<th>Email</th>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Last Name</th>
										<th>Contact</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									@if($users->count())
										@foreach($users as $user)
											<tr class=" {{$user->status_id == 2 ? 'danger' : 'success'}}">
												<td>{{$user->username}}</td>
												<td>{{$user->role->roles}}</td>
												<td>{{$user->email}}</td>
												<td>{{$user->firstname}}</td>
												<td>{{$user->middlename}}</td>
												<td>{{$user->lastname}}</td>
												<td>{{$user->contact}}</td>
												<td>
													<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span></a>
													<a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-thumbs-up"></span></a>
												</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection