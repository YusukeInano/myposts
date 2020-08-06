<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'train_name' => 'required',
    );
    

    public function posts()
    {
      return $this->hasMany('App\Post');
    }
}
