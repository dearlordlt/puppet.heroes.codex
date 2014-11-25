@extends('layout.main')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<form role="form" method="POST" action="{{ URL::route('account-forgot-password-post') }}">
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
				<button type="submit" class="btn btn-default">Submit</button>
				{{ Form::token() }}
			</form>

		</div>
	</div>
</div>

@stop
