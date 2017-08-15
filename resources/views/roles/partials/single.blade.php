<div class="role">

    @include('partials.actions.delete', ['action' => action('RolesController@destroy', ['role' => $role->id])])

    <a href="{{ action('RolesController@show', ['role' => $role->id]) }}">
        {{ $role->display_name }}
    </a> ({{ $role->name }})
</div>