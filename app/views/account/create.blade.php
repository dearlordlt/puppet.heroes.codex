@extends('layout.main')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<form role="form" method="POST" action="{{ URL::route('account-create-post') }}">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" {{ Input::old('email') ? ' value="'.e(Input::old('email')).'" ' : '' }}>
					@if($errors->has('email'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('email') }}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" {{ Input::old('username') ? ' value="'.e(Input::old('username')).'" ' : '' }}>
					@if($errors->has('username'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('username') }}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="password" name="password">
					@if($errors->has('password'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('password') }}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="password_again">Password again</label>
					<input type="password" class="form-control" id="password_again" placeholder="password" name="password_again">
					@if($errors->has('password_again'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('password_again') }}
						</div>
					@endif
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
				{{ Form::token() }}
			</form>
		</div>
	</div>
</div>

@stop
