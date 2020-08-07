<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
     public function index(Request $request)
    {
        $posts = Post::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        return view('main.main', ['headline' => $headline, 'posts' => $posts]);
    }
}
