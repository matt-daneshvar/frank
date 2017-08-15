<?php

namespace Frank\Http\Controllers;

use Frank\Models\User;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class UsersController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new User();
    }

    public function store(Request $request)
    {
        $user = User::make($request->only(['name', 'position', 'email']));
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return back();
    }
}
