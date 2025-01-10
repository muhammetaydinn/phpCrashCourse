<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('layouts.posts.index', [
            'posts' => $posts,
        ]);
    }

    // adding Post for model binding
    public function show(Post $post)
    {
        return view('layouts.posts.single', [
            'post' => $post,
        ]);
    }
}
