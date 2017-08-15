<div class="stakeholder">
    <span class="glyphicon glyphicon-user"></span>&nbsp;

@if(!empty($controls) && $controls)
        @include('partials.actions.delete', ['action' => action('StakeholdersController@destroy', ['project' => $project->id ,'stakeholder' => $stakeholder->id])])
    @endif

    <a href="{{ action('UsersController@show', ['user' => $stakeholder->id]) }}" class="name">{{ $stakeholder->name }}</a>
    (<span class="position">{{ $stakeholder->role($project)->display_name }}</span>)
</div>