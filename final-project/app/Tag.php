<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $fillable = ['tags', 'order'];

    public function posts()

    {
    
       return $this->belongsToMany('App\Post');
       //return $this->belongsToMany('App\Post','post_tag','post_id','tag_id');
    }
}
