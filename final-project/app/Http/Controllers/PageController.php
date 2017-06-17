<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    
     function frontpage(){
        $category=Category::get();
        $tags=Tag::get();
        return view ('pages.welcome',compact('category','tags'));
    }

    //function archive(){
    	//return view ('pages.archives');
   // }
    function blog()
    {
        $posts=Post::orderby('order','desc')->get();
         $posts=Post::paginate(7);
         $category=Category::get();
         $tags=Tag::get();
        
        return view('pages.blog',compact('posts','category','tags'));
    }
    
    function contact(){
         $category=Category::get();
         $tags=Tag::get();
    	return view ('pages.contact',compact('category','tags'));
    }

    function about(){
     $category=Category::get();
     $tags=Tag::get();
     return view ('pages.about',compact('category','tags'));
    }
    //function login(){
    	//return view ('pages.welcome');
    //}
}


