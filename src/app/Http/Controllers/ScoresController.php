<?php

namespace App\Http\Controllers;


use App\Models\User;

class ScoresController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('contents.scores.index', compact('users'));
    }

    public function update(User $user)
    {
        return view('contents.scores.input', compact('user'));
    }

}