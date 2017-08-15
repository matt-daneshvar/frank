<div class="link">
    <form method="POST" action="{{ action('BrandsController@destroy', ['brand' => $brand->id]) }}" style="display: inline-block;">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button class="btn btn-xs btn-danger">Delete</button>
    </form>

    <a href="{{ action('BrandsController@show', ['brand' => $brand->id]) }}">
        {{ $brand->name }}
    </a> ({{ $brand->projects()->count() }})
</div>