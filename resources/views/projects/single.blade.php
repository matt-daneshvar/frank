<div class="project">
    <a href="{{ action('ProjectsController@show', ['project' => $project->id]) }}">{{ $project->name }}</a>

    <span class="label label-default">{{ $project->status->name or '' }}</span>
</div>