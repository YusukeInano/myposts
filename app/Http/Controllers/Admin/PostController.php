<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

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
    
    public function edit()
    {
      return view('admin.post.edit');
    }
    
    public function update()
    {
      return redirect('admin/post/');
    }
    
    public function delete()
    {
      return redirect('admin/post/');
    }  
}
