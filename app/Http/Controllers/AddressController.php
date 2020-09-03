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

    public function write2(Request $moji)
	{
	    $data2 = $moji::all();
	    return view('map.search', compact('data2'));
	}
}