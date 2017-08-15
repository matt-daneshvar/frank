@extends('layouts.app')

@section('content')
    <div class="user">
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->position }}</p>

        <h2>Projects</h2>
        @foreach($user->projects as $project)
            @include('projects.partials.single')
        @endforeach

    </div>
@stop