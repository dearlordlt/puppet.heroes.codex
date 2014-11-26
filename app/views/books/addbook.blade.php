@extends('layout.main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" method="POST" action="{{ URL::route('book-add-post') }}">
                    <div class="form-group">
                        <label for="name">Book name</label>
                        <input type="text" class="form-control" id="name" placeholder="Book name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Book description</label>
                        <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    {{ Form::token() }}
                </form>
            </div>
        </div>
    </div>
@section('content')

@stop
