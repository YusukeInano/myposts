<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
     public function add()
    {
      return view('comment.create');
    }
    
    
    public function store(Request $request)
    {
      $this->validate($request, Comment::$rules);

      $comments = new Comment;
      $form = $request->all();

      unset($form['_token']);

      $comments->fill($form);
      $comments->save();
      
      return redirect('/home/store');
    }
}
