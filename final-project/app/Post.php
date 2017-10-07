<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Post extends Model
{


    use SoftDeletes;

     protected $fillable = [
       'author_id', 'title', 'content', 'excerpt','featured','category_id','restore_id','slug','order',
      ];

      protected $dates = ['deleted_at'];

     public function category()
      {
        return $this->belongsTo('App\Category');
      }

    public function tags()
     {
       return $this->belongsToMany('App\Tag');
     }

    public function comments()
     {
       return $this->hasMany(Comments::class);
     }


  public function user()
    {
       return $this->belongsTo(User::class);
    }
    
}
