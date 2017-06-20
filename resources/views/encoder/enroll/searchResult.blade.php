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
						<h2 class="text-center">Enrolling Students</h2>
					</div>
					<div class="panel-body">
						@if(Session::has('info'))
							<div class="alert alert-info">{{Session::get('info')}}</div>
						@endif
						<div>
							<table class="table">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Course</th>
										<th>Operations</th>
		
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{$student->id}}</td>
										<td>{{$student->l_name}}</td>
										<td>{{$student->f_name}}</td>
										<td>{{$student->m_name}}</td>
										<td>{{$student->course->course}}</td>
										<td>
											<a href="{{route('encoder_enroll_student', ['student_id'=> $student->id])}}" class="btn btn-success btn-xs">Enroll</a>
											<a href="#" class=" btn btn-info btn-xs">View</a>
										</td>
									</tr>
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