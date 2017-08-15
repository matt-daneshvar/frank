@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @foreach($roles as $role)
            @include('roles.partials.single')
        @endforeach

        <hr/>

        <form method="POST" action="{{ action('RolesController@store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Project Manager"/>
            </div>
            <input class="btn btn-primary" type="submit"/>
        </form>
    </div>
@stop