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
}
