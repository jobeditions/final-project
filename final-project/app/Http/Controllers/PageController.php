<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Settings;

class PageController extends Controller
{
    
     function frontpage(){
        $category=Category::get();
        $tags=Tag::get();
        $setting=Settings::first();
        $firstpost=Post::orderby('created_at','desc')->first();
        $secondpost=Post::orderby('created_at','desc')->skip(1)->take(1)->get()->first();
        $thirdpost=Post::orderby('created_at','desc')->skip(2)->take(1)->get()->first();

        return view ('pages.welcome',compact('category','tags','setting','firstpost','secondpost','thirdpost'));
    }

    //function archive(){
    	//return view ('pages.archives');
   // }
    function blog()
    {
         $posts=Post::orderby('order','desc')->get();
         $posts=Post::paginate(7);
         $category=Category::get();
         $setting=Settings::first();
         $tags=Tag::get();
        
        return view('pages.blog',compact('posts','category','tags','setting'));
    }
    
    function contact(){
         $category=Category::get();
         $tags=Tag::get();
         $setting=Settings::first();
    	return view ('pages.contact',compact('category','tags','setting'));
    }

    function about(){
     $category=Category::get();
     $tags=Tag::get();
    $setting=Settings::first();
     return view ('pages.about',compact('category','tags','setting'));
    }
    

    function slugpost($slug){
     $category=Category::get();
     $tags=Tag::get();
     $setting=Settings::first();
     $post = Post::where('slug',$slug)->first();
     return view ('pages.postslug',compact('category','tags','setting','post'));
    }
}


