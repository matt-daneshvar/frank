<div class="link">
    @include('partials.actions.delete', ['action' => action('BrandsController@destroy', ['brand' => $brand->id])])


    <a href="{{ action('BrandsController@show', ['brand' => $brand->id]) }}">
        {{ $brand->name }}
    </a> ({{ $brand->projects()->count() }})
</div>