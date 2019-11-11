<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfilesController extends Controller
{
    public function index($user)
    {
        // $user = User::findOrFail($user);
        $user = User::where('username', $user)->firstOrfail();

              return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
