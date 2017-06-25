<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Settings;
use Carbon\Carbon;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    function contact(){
         $category=Category::get();
         $tags=Tag::get();
         $setting=Settings::first();
         $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at)','desc')
         ->get()
         ->toArray();

         

    	return view ('mail.contact',compact('category','tags','setting','archives'));
    }

    function send(){
         Mail::send(new SendMail());
         return view ('mail.mail');
    }
}
