<?php

namespace Frank\Http\Controllers;

use Frank\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
}
