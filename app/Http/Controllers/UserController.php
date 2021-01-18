<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function edit() {
        return view('users.edit', [
            'user' => Auth::user()
        ]);
    }

    public function show(User $user)
    {
        $user->load('links');

        return view('users.show', [
            'user' => $user
        ]);
    }
}
