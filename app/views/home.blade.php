@extends('layout.main')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Rules</h4>
                    <ul class="list-unstyled">
                        <li><a>Vigor</a></li>
                        <li><a>Attributes</a></li>
                        <li><a>Fatigue</a></li>
                        <li><a>Breaking shields</a></li>
                        <li><a>Decapacitating foes</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Articles</h4>
                    <ul class="list-unstyled">
                        <li><a>Basic combat</a></li>
                        <li><a>Advanced combat</a></li>
                        <li><a>Creating new character</a></li>
                        <li><a>How to be a master</a></li>
                        <li><a>How to osom</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Weapons</h4>
                    <ul class="list-unstyled">
                        <li><a>Broadsword</a></li>
                        <li><a>Katana</a></li>
                        <li><a>Tower shield</a></li>
                        <li><a>Lightsaber (red)</a></li>
                        <li><a>Vytauto kalavijas</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Combat skills</h4>
                    <ul class="list-unstyled">
                        <li><a>Axes</a></li>
                        <li><a>Swords</a></li>
                        <li><a>Spears</a></li>
                        <li><a>Bows</a></li>
                        <li><a>Polearms</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Non combat skills</h4>
                    <ul class="list-unstyled">
                        <li><a>Medicine</a></li>
                        <li><a>Survival</a></li>
                        <li><a>Navigation</a></li>
                        <li><a>Writing</a></li>
                        <li><a>Languages</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Armor</h4>
                    <ul class="list-unstyled">
                        <li><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Books</h4>
                    <ul class="list-unstyled">
                        <li><a>Book 1</a></li>
                        <li><a>Book 2</a></li>
                        <li><a>Book 3</a></li>
                        <li><a>Book 4</a></li>
                        <li><a>Book 5</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Chapters</h4>
                    <ul class="list-unstyled">
                        <li><a>Combat</a></li>
                        <li><a>Character creation</a></li>
                        <li><a>What is this ?</a></li>
                        <li><a>Can i win this game ?</a></li>
                        <li><a>How to start ?</a></li>
                    </ul>
                    <hr>
                    @if(Auth::check())
                        <a class="btn btn-primary btn-md" href="#" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                    @endif
                    <a class="btn btn-success btn-md" href="#" role="button"><span class="glyphicon glyphicon-list"></span> </a>
                </div>
            </div>
        </div>
    </div>
	@if(Auth::check())
		<div class="well">Hello, <b>{{ Auth::user()->username }}</b></div>
	@else
        <div class="well">You are not signed in.</div>
	@endif
@stop
