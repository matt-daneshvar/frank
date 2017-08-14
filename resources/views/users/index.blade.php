@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        @include('users.partials.single', ['controls' => true])
    @endforeach

    <hr/>

    <form method="POST" action="{{ action('UsersController@store') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="John Doe"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="john@example.com"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="position" placeholder="Project Manager"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" autocomplete="new-password"/>
        </div>
        <input class="btn btn-primary" type="submit"/>
    </form>
@stop