@extends('layouts.app')

@section('content')
    <h1>{{ $brand->name }}</h1>

    <h2>Projects</h2>
    @foreach($brand->projects as $project)
        @include('projects.partials.single')
    @endforeach

    <hr/>

    <form method="POST" action="{{ action('ProjectsController@store', ['brand' => $brand->id]) }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Website Revamp"/>
        </div>
        <input class="btn btn-primary" type="submit"/>
    </form>
@stop