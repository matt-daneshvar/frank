@extends('layouts.app')

@section('content')
    <div class="user">
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->position }}</p>
    </div>
@stop