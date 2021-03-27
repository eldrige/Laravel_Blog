<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // return all posts form db
        $posts = Post::get();  //a laravel collection
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        $request->user()->posts()->create([
            // user_id gets auto filled for us
            'body' => $request->body
        ]);

        return back();
    }
}
