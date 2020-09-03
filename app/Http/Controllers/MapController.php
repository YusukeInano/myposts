<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function showMap()
    {
      return view('map.map');
    }
    
    public function showTrain()
    {
      return view('main.train');
    }
    
    public function showTrain1()
    {
      return view('main.train_down');
    }
    
    public function showKatsuragawa()
    {
      return view('main.katsuragawa');
    }
}
