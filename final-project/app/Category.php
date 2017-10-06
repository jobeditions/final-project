<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;



class Category extends Model
{
    use SoftDeletes;
	protected $fillable = ['name','title', 'order',];
	protected $dates = ['deleted_at'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
