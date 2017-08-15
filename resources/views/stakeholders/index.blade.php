@extends('layouts.app')

@inject('users','Frank\Models\User')
@inject('roles','Frank\Models\Role')

@section('content')
    <div class="col-md-12">
        @include('projects.partials.header')

        @foreach($stakeholders as $stakeholder)
            @include('stakeholders.partials.single', ['controls' => true])
        @endforeach

        <hr/>

        <form method="POST" action="{{ action('StakeholdersController@store', ['project' => $project->id]) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <select class="form-control" name="stakeholder">
                    @foreach($users->all() as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="role">
                    @foreach($roles->all() as $role)
                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-primary" type="submit"/>
        </form>
    </div>
@stop