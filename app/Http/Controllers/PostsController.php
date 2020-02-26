<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Post;


use Illuminate\Http\Request;

class PostsController extends Controller
{
  //check if the user loged in and then continue otherwise shod login page

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create() {
        return view('posts.create');
    }

    public function store() {

        $validatedData = request()->validate([
                'caption' => 'required|melli_code',
                'image' => 'required|image',
                // another form of spelling 'image' => ['required', 'image'],

        ]);

        $imagePath = request('image')->store('uploads', 'public');
            $image = image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();
 ;           // we can use validate to create
            //  auth()->user()->posts()->create($validatedData);

            auth()->user()->posts()->create([
                'caption' => $validatedData['caption'],
                'image' => $imagePath,
            ]);
            return redirect('/profile/'. auth()->user()->username);
    }
}
