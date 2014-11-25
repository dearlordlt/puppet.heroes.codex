@extends('layout.main')

@section('content')
	<div class="media">
		<a class="media-left" href="#">
			<img src="{{ URL::route('home') }}/img/leon64.jpg" alt="{{ e($user->username) }}">
		</a>
		<div class="media-body">
			<h4 class="media-heading">User: {{ e($user->username) }}</h4>
			Account created at {{ e($user->created_at) }}. This account is
			@if($user->active == 1)
				activated
			@else
				not activated
			@endif
		</div>
	</div>
@stop
