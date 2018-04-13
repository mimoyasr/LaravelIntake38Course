<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',[

            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        dd('store');
    }
}
