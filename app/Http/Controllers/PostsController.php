<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
     public function index(Request $request)
    {
        $posts = Post::all()->sortByDesc('updated_at');

        return view('main.main', ['posts' => $posts]);
    }
    
    public function showDetail(Post $post)
    {
        return view('main.showDetail', ['post' => $post]);
    }
}
