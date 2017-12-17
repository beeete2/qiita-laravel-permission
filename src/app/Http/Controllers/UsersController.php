<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('contents.users.index', compact('users'));
    }

    public function update(User $user)
    {
        return view('contents.users.input', compact('user'));
    }

}
