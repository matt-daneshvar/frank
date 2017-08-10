@extends('layouts.app')

@inject('users','Frank\Models\User')

@section('content')
    <div class="col-md-12">
        @include('projects.partials.header')

        @foreach($stakeholders as $stakeholder)
            @include('stakeholders.partials.single')
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
            <input class="btn btn-primary" type="submit"/>
        </form>
    </div>
@stop