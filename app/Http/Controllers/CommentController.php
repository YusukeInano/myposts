<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    
   public function store(Request $request, Post $post) {
       
    $this->validate($request, [
      'comment' => 'required'
    ]);
    $comment = new Comment(['comment' => $request->comment]);
    $post->comments()->save($comment);
    return redirect()->action('PostsController@showDetail', $post);
  }
  
   public function delete(Post $post, Comment $comment) {
     $comment->delete();
     return redirect()->back();
  }
    
  }

    