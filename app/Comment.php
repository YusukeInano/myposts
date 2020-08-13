<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'comment' => 'required',
    );
    
     public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
