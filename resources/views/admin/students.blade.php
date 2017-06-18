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
						  <li role="presentation" class="active"><a href="{{route('admin_students')}}">List</a></li>
						  <li role="presentation"><a href="{{route('admin_students_upload')}}">New</a></li>
						  
						</ul>

						<table class="table table-striped">
							<thead>
								<tr>
									<th>Lastname</th>
									<th>Firstname</th>
									<th>Middlename</th>
									<th>Age</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								@if($students->count() > 0)
									@foreach($students as $student)
										<tr>
											<td>{{$student->l_name}}</td>
											<td>{{$student->f_name}}</td>
											<td>{{$student->m_name}}</td>
											<td>{{$student->age}}</td>
											<td>{{$student->email}}</td>
										</tr>
									@endforeach
								@endif
							</tbody>
						</table>
						<center>{{$students->links()}}</center>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection