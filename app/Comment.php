<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'commenter' => 'required',
        'comment' => 'required',
        'post_id' => 'required',
    );
}
