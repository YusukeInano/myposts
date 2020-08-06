<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'content' => 'required',
        'place' => 'required',
        'train_id' => 'required',
    );
    
    public function histories()
    {
      return $this->hasMany('App\History');
    }
    
    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
