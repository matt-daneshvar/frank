@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @include('projects.partials.header')

        @foreach($links as $link)
            @include('links.partials.single')
        @endforeach

        <hr/>

        <form method="POST" action="{{ action('LinksController@store', ['project' => $project->id]) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Source Code"/>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="url" placeholder="https://github.com/4thirteen/frank"/>
            </div>
            <input class="btn btn-primary" type="submit"/>
        </form>
    </div>
@stop