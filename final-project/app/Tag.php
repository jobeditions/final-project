<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $fillable = ['tags', 'order'];

    public function posting()

    {
    
       return $this->belongsToMany(Post::class);
       //return $this->belongsToMany('App\Post','post_tag','post_id','tag_id');
    }
}
