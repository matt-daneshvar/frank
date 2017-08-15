<div class="stakeholder">
    @include('partials.actions.delete', ['action' => action('StakeholdersController@destroy', ['project' => $project->id ,'stakeholder' => $stakeholder->id])])

    <span>{{ $stakeholder->name }}</span>
</div>