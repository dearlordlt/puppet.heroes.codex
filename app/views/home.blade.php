@extends('layout.main')

@section('content')
	@if(Auth::check())
		<div class="well">Hello, <b>{{ Auth::user()->username }}</b></div>
	@else
		<div class="well">You are not signed in.</div>
	@endif
@stop
