<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
         dd(Post::create([
             'id' => 30,
             'title' => 'created tile',
             'description' => 'ay 7aga'
         ]));
         dd(Post::all());
         return 'hello';
    }

    
}
