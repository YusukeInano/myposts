<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;

class PostController extends Controller
{
  
  
    public function add()
    {
      return view('admin.post.create');
    }
    
    
    
    public function create(Request $request)
    {
      $this->validate($request, Post::$rules);

      $posts = new Post;
      $form = $request->all();

      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $posts->image_path = basename($path);
      } else {
        $posts->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);

      $posts->fill($form);
      $posts->save();
      
      return redirect('admin/index');
    }
    
    
    
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Post::where('train_id', 'like','%'.$cond_title.'%')->get();
      } else {
          $posts = Post::all();
      }
      return view('admin.post.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
      $posts = Post::find($request->id);
      if (empty($posts)) {
        abort(404);    
      }
      return view('admin.post.edit', ['posts_form' => $posts]);
    }
    
    public function update(Request $request)
    {
      $this->validate($request, Post::$rules);
      $posts = Post::find($request->id);
      $posts_form = $request->all();
      if (isset($posts_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $posts->image_path = basename($path);
        unset($posts_form['image']);
      } elseif (isset($request->remove)) {
        $posts->image_path = null;
        unset($posts_form['remove']);
      }
      unset($posts_form['_token']);
      $posts->fill($posts_form)->save();
      
      return redirect('admin/index');
    }
    
    public function delete(Request $request)
    {
      $posts = Post::find($request->id);
      $posts->delete();
      return redirect('admin/index');
    }  
}
