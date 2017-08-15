<div class="user row">
    <div class="col-md-12">
        <span class="glyphicon glyphicon-user"></span>&nbsp;

    @if(!empty($controls) && $controls)
        @include('partials.actions.delete', ['action' => action('UsersController@destroy', ['user' => $user->id])])
    @endif


        <a href="{{ action('UsersController@show', ['user' => $user->id]) }}" class="name">{{ $user->name }}</a>
        (<span class="position">{{ $user->position }}</span>)
    </div>
</div>
