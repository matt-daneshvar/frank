@extends('layouts.app')

@inject('permissions','Frank\Models\Permission')


@section('content')
    <h1>{{ $role->display_name }}</h1>
    <p>{{ $role->name }}</p>

    <h2>Permissions</h2>
    <form>
        @foreach($permissions->all() as $permission)
            @include('permissions.partials.checkbox')
        @endforeach
        <button class="btn btn-primary">Update</button>
    </form>

@stop