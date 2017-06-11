<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'name','title', 'order',
      ];
     public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
