<div class="permission form-check">
    <label for="permission[{{ $permission->display_name }}]">
        <input type="checkbox" id="permission[{{ $permission->display_name }}]"/>
        {{ $permission->display_name }} ({{ $permission->name }})
    </label>

</div>