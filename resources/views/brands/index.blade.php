@extends('layouts.app')

@section('content')
    @foreach($brands as $brand)
        @component('brands.partials.single', ['brand' => $brand]) @endcomponent
    @endforeach

    <hr/>

    <form method="POST" action="{{ action('BrandsController@store') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nike"/>
        </div>
        <input class="btn btn-primary" type="submit"/>
    </form>
@stop