@extends('layouts.app')

@section('content')
    @foreach($projects as $project)
        @component('projects.single', ['project' => $project]) @endcomponent
    @endforeach
@stop