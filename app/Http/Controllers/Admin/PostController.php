<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function add()
    {
      return view('admin.post.create');
    }
    
    public function create(Request $request)
    {
      return redirect('admin/post/create');
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
