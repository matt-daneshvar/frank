<div class="link">
    <a href="{{ $link->url }}">
        {{ $link->name }}
    </a>

    <form method="POST" action="{{ action('LinksController@destroy', ['link' => $link->id]) }}">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <input value="X" type="submit"/>
    </form>
</div>