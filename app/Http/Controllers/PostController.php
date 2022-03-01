<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postCreate()
    {
        return view('post');
    }

    public function postData(Request $request)
    {
        $input = $request->all();

        Post::create($input);

        $posts = Post::all();
        return view('postIndex', compact('posts'));
    }
}
