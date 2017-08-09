@extends('layouts.app')

@section('content')
    @include('projects.partials.header')

    @foreach($links as $link)
        @include('links.single')
    @endforeach

    <form method="POST" action="{{ action('LinksController@store', ['project' => $project->id]) }}">
        {!! csrf_field() !!}
        <input type="text" name="name"/>
        <input type="text" name="url"/>
        <input type="submit"/>
    </form>
@stop