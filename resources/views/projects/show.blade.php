@extends('layouts.app')

@section('content')
    <div class="project">
        <div class="col-md-8">
            @include('projects.partials.header')

            <h2>Timeline <span class="badge">{{ $project->timeline->duration }} Days</span></h2>
            <div class="timeline">
                @foreach($project->timeline->activities as $activity)
                    <div class="activity <?= $activity->duration == 0 ? 'milestone' : '' ?>">
                        <span class="name">{{ $activity->name }}</span>
                        <span class="duration" style="width:{{ $activity->duration * 2 }}px; margin-left: {{ $activity->start->diffInDays(\Carbon\Carbon::today()) * 2 }}px"></span>
                    </div>
                @endforeach
            </div>
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
                        <span class="name">{{ $stakeholder->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop