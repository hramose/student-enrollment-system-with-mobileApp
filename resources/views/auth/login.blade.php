@extends('template.default')

@section('styles')
<style type="text/css">
	body{
		background-color: #253144;
	}
	.input-group{
		margin-bottom: 10px;
	}
	.well{
		margin-top: 10%;
		border-radius: 20px;
	}
	.well p {
		margin-top: -60px;
	}


	
</style>
@endsection

@section('contents')
	<div class="container">
		<div class="col-md-6 col-md-offset-3 well">
			<p class="text-center"><img src="{{URL::to('img/1.png')}}" height="" width="120px"></p>
			@if(Session::has('info'))
				<div class="alert alert-danger text-center">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  					<strong>Error!</strong> {{Session::get('info')}}
				</div>
			@endif
			<form action="{{route('loginCheck')}}" method="POST">
				<div class="input-group {{$errors->has('username') ? 'has-error' : ''}}">
					<span class="input-group-addon" id="addon1">@</span>
					<input type="text" name="username" class="form-control input-lg" aria-describedby="addon1" placeholder="Enter Username" maxlength="12">
				</div>
				<div class="input-group {{$errors->has('password') ? 'has-error' : ''}}">
					<span class="input-group-addon" id="addon2"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" class="form-control input-lg" aria-describedby="addon2" placeholder="Enter Password" maxlength="12">
				</div>
				<div class="checkbox">
			    	<label><input type="checkbox" name="remember"> Remember me</label>
			   	</div>
				<button class="btn btn-success btn-block btn-lg" type="submit">Log-in</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
@endsection

@section('scripts')

@endsection