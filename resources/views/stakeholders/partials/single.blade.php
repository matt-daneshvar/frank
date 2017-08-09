<div class="stakeholder">
    <span>{{ $stakeholder->name }}</span>

    <form method="POST" action="{{ action('StakeholdersController@destroy', ['project' => $project->id ,'stakeholder' => $stakeholder->id]) }}" style="display: inline-block;">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button class="btn btn-xs btn-danger">Delete</button>
    </form>
</div>