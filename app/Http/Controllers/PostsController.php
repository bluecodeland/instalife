<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create() {
        return view('posts.create');
    }

    public function store() {

        $validatedData = request()->validate([
                'caption' => 'required|max:500',
                'image' => 'required',

        ]);

        dd(request()->all());
    }
}
