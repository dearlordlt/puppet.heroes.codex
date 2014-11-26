@extends('layout.main')
    <div class="container-fluid">
        <h4>Books</h4>
        <ul class="list-group">
            @foreach ($books as $book)
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $book->name }}</h4>
                    <p class="list-group-item-text">
                        {{ $book->description }}
                    </p>
                </a>
            @endforeach
        </ul>

        @if(Auth::check())
            <div class="well">
                <h4 class="list-group-item-heading"></h4>
                <p class="list-group-item-text">
                    <a class="btn btn-primary btn-md" href="{{ URL::route('book-add-get') }}" role="button"><span class="glyphicon glyphicon-plus-sign"></span> </a>
                </p>
            </div>
        @endif
    </div>
@section('content')

@stop
