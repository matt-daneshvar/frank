<?php

namespace Frank\Http\Controllers;

use Frank\Models\Role;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class RolesController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new Role();
    }

    public function update(Role $role, Request $request)
    {
        $role->permissions()->sync(array_keys($request->get('permission')));

        return back();
    }
}
