@extends('layouts.app')

@section('content')
    @foreach($projects as $project)
        @component('projects.partials.single', ['project' => $project]) @endcomponent
    @endforeach
@stop