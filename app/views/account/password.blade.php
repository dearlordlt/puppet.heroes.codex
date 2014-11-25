@extends('layout.main')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<form role="form" method="POST" action="{{ URL::route('account-change-password-post') }}">
				<div class="form-group">
					<label for="old_password">Old password</label>
					<input type="password" class="form-control" id="old_password" placeholder="Enter old password" name="old_password">
					@if($errors->has('old_password'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('old_password') }}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="password">New password</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					@if($errors->has('password'))
						<div style="margin-top:5px" class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<strong>Warning!</strong> {{ $errors->first('password') }}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="password_again">New password again</label>
					<input type="password" class="form-control" id="password_again" placeholder="Password again" name="password_again">
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
