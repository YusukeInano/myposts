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
    
    public function showDetail($post_id)
    {
        $posts = Post::find('$post_id');
        
        // if (is_null($posts)) {
        //     \Session::flash('err_msg', 'データがありません');
        //     return redirect(route('home'));
        // }

        return view('main.showDetail', ['posts' => $posts,]);
    }
}
