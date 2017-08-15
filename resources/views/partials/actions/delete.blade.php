<form method="POST" action="{{ $action }}" style="display: inline-block;">
    {!! csrf_field() !!}
    {!! method_field('DELETE') !!}
    <button class="btn btn-xs btn-danger">Delete</button>
</form>