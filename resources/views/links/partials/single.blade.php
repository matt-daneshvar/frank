<div class="link">
    <a href="{{ $link->url }}">
        {{ $link->name }}
    </a>

    <form method="POST" action="{{ action('LinksController@destroy', ['link' => $link->id]) }}" style="display: inline-block;">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button class="btn btn-xs btn-danger">Delete</button>
    </form>
</div>