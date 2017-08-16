<div class="permission form-check">
    <label for="permission[{{ $permission->id }}]">
        <input type="checkbox" name="permission[{{ $permission->id }}]" id="permission[{{ $permission->id }}]" {{ isset($checked) && $checked ? 'checked' : '' }}/>
        {{ $permission->display_name }} ({{ $permission->name }})
    </label>
</div>