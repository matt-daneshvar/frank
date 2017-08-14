<?php

namespace Frank\Http\Controllers;

use Frank\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', ['users' => User::all()]);
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $user = User::make($request->only(['name', 'position', 'email']));
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
