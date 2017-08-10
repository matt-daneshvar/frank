<div class="user row">
    <div class="col-md-1">
        <span class="glyphicon glyphicon-user"></span>
    </div>
    <div class="col-md-11">
        <a href="{{ action('UsersController@show', ['user' => $user->id]) }}" class="name">{{ $user->name }}</a>
        <br/>
        <span class="position">{{ $user->position }}</span>
    </div>
</div>
