<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = [
            [
                'title' => 'Mando is a good dog',
                'content' => 'this is some content',
            ],
            [
                'title' => 'Cats are cute',
                'content' => 'this is some cat content',
            ],
            [
                'title' => 'Birds can fly',
                'content' => 'this is some bird content',
            ],
            [
                'title' => 'Fish live in water',
                'content' => 'this is some fish content',
            ],
            [
                'title' => 'Lions are the king of the jungle',
                'content' => 'this is some lion content',
            ],
        ];
        return view('layouts.posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($post)
    {
        return view('layouts.posts.single', [
            'post' => $post
        ]);
    }
}
