<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PageController extends Controller
{
    
     function frontpage(){
        $category=Category::get();
        return view ('pages.welcome',compact('category'));
    }

    //function archive(){
    	//return view ('pages.archives');
   // }
    function blog()
    {
        $posts=Post::orderby('order','desc')->get();
        //$posts=Post::all();
        $category=Category::get();
        
        return view('pages.blog',compact('posts','category'));
    }
    
    function contact(){
         $category=Category::get();
    	return view ('pages.contact',compact('category'));
    }

    function about(){
     $category=Category::get();
     return view ('pages.about',compact('category'));
    }
    //function login(){
    	//return view ('pages.welcome');
    //}
}


