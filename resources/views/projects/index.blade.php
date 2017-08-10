@extends('layouts.app')

@section('content')
    <h1>Your Projects</h1>
    @foreach($projects as $project)
        @component('projects.partials.single', ['project' => $project]) @endcomponent
    @endforeach
@stop