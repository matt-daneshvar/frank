<div class="link">

    @include('partials.actions.delete', ['action' => action('LinksController@destroy', ['link' => $link->id])])

    <a href="{{ $link->url }}">
        {{ $link->name }}
    </a>
</div>