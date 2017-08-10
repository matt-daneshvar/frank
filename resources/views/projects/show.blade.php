@extends('layouts.app')

@section('content')
    <div class="project">
        <div class="col-md-8">
            @include('projects.partials.header')

            @include('timelines.partials.gantchart', ['timeline' => $project->timeline])
        </div>
        <div class="col-md-4">
            <h2>
                <a href="{{ action('LinksController@index', ['project' => $project->id]) }}">Links</a>
            </h2>
            <ul>
                @foreach($project->links as $link)
                    <li>
                        <a href="{{ $link->url }}">{{ $link->name }}</a>
                    </li>
                @endforeach
            </ul>

            <h2>
                <a href="{{ action('StakeholdersController@index', ['project' => $project->id]) }}">Project Team</a>
            </h2>
            <div class="stakeholders">
                @foreach($project->stakeholders as $stakeholder)
                    <div class="profile">
                        @include('users.partials.single', ['user' => $stakeholder])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop