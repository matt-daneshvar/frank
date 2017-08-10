@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @include('projects.partials.header', ['project' => $timeline->project])
        @include('timelines.partials.gantchart', ['controls' => true])

        <hr/>

        <form method="POST" action="{{ action('ActivitiesController@store', ['project' => $timeline->project->id]) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Debrief"/>
            </div>
            <div class="form-group">
                <input name="start" type="date" class="form-control"/>
            </div>
            <div class="form-group">
                <input name="end" type="date" class="form-control"/>
            </div>
            <input class="btn btn-primary" type="submit"/>
        </form>
    </div>
@stop