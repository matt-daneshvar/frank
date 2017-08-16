@extends('layouts.app')

@inject('permissions','Frank\Models\Permission')


@section('content')
    <h1>{{ $role->display_name }}</h1>
    <p>{{ $role->name }}</p>

    <h2>Permissions</h2>
    <form method="POST" action="{{ action('RolesController@update', ['role' => $role->id]) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        @foreach($permissions->all() as $permission)
            @include('permissions.partials.checkbox', ['checked' => $role->can($permission)])
        @endforeach
        <button class="btn btn-primary">Update</button>
    </form>

@stop