<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{


    use SoftDeletes;

      protected $fillable = [
        'title', 'content', 'excerpt','featured','category_id','slug','order',
      ];

      protected $dates = ['deleted_at'];

     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeSearch($query,$s)
    {
        return $query->where('title','LIKE','%'.$s.'%');
                     //->orWhere('content','L','%'.$s.'%');
                     //->orWhere('excerpt','LIKE','%'.$s.'%');
    }
}
