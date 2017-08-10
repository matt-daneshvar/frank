<div class="link">
    <form method="POST" action="{{ action('LinksController@destroy', ['link' => $link->id]) }}" style="display: inline-block;">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button class="btn btn-xs btn-danger">Delete</button>
    </form>

    <a href="{{ $link->url }}">
        {{ $link->name }}
    </a>
</div>