<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model

 
{

	protected $fillable = ['tags'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
