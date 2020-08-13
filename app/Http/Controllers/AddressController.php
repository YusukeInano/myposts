<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

class AddressController extends Controller
{
    public function write1(Request $moji)
	{
	    $data1 = $moji::all();
	    return view('admin.post.create', compact('data1'));
	}
}
