<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posting()
    {
       return $this->belongsToMany(Post::class);
    }
}
