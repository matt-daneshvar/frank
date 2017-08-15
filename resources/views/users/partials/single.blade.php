<div class="user row">
    <div class="col-md-12">
        <span class="glyphicon glyphicon-user"></span>&nbsp;

    @if(!empty($controls) && $controls)
            <form method="POST" action="{{ action('UsersController@destroy', ['user' => $user->id]) }}" style="display: inline-block;">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-xs btn-danger">Delete</button>
            </form>
        @endif


        <a href="{{ action('UsersController@show', ['user' => $user->id]) }}" class="name">{{ $user->name }}</a>
        (<span class="position">{{ $user->position }}</span>)
    </div>
</div>
