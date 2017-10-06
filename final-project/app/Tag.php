<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Tag extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['tags', 'order'];
    protected $dates = ['deleted_at'];

    public function posts()

    {
    
       return $this->belongsToMany('App\Post');
       //return $this->belongsToMany('App\Post','post_tag','post_id','tag_id');
    }
}
