<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     protected $fillable = [
        'post_id','user_id','body','approved',
      ];

     public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
