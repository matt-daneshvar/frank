<h1>
    <a href="{{ action('ProjectsController@show', ['project' => $project->id])  }}">{{ $project->name }}</a>
    <span class="label label-default status">{{ $project->status->name or '' }}</span>
</h1>