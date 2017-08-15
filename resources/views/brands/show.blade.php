@extends('layouts.app')

@section('content')
    <h1>{{ $brand->name }}</h1>

    <h2>Projects</h2>
    @foreach($brand->projects as $project)
        @include('projects.partials.single')
    @endforeach
@stop