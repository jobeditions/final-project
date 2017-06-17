<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
     protected $fillable = [
       'site_name', 'title','description','contact_email', 'contact_number', 'address','image1','image2','image3','image4',
      ];
}
