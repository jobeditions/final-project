<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Settings;
use Carbon\Carbon;
class PageController extends Controller
{
    
     function frontpage(){
        $category=Category::get();
        $tags=Tag::get();
        $setting=Settings::first();
        $firstpost=Post::orderby('created_at','desc')->first();
        $secondpost=Post::orderby('created_at','desc')->skip(1)->take(1)->get()->first();
        $thirdpost=Post::orderby('created_at','desc')->skip(2)->take(1)->get()->first();
        $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at)','desc')
        ->get()
        ->toArray();
        return view ('pages.welcome',compact('category','tags','setting','firstpost','secondpost','thirdpost','archives'));
    }

    function blog()
    {
         $posts=Post::orderby('order','desc')->get();
         $posts=Post::paginate(7);
         $category=Category::get();
         $setting=Settings::first();
         $tags=Tag::get();
         $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at)','desc')
         ->get()
         ->toArray();
         return view('pages.blog',compact('posts','category','tags','setting','archives'));
    }
    
    function contact(){
         $category=Category::get();
         $tags=Tag::get();
         $setting=Settings::first();
         $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at)','desc')
         ->get()
         ->toArray();
    	return view ('pages.contact',compact('category','tags','setting','archives'));
    }

    function about(){
     $category=Category::get();
     $tags=Tag::get();
     $setting=Settings::first();
     $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
     ->groupBy('year','month')
     ->orderByRaw('min(created_at)','desc')
     ->get()
     ->toArray();
     return view ('pages.about',compact('category','tags','setting','archives'));
    }
    

    function slugpost($slug){
     $category=Category::get();
     $tags=Tag::get();
     $setting=Settings::first();
     $post = Post::where('slug',$slug)->first();
     $next_id = Post::where('id', '>', $post->id)->min('id');
     $next = Post::find($next_id);
     $previous_id = Post::where('id', '<', $post->id)->max('id');
     $previous = Post::find($previous_id);
     $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
     ->groupBy('year','month')
     ->orderByRaw('min(created_at)','desc')
     ->get()
     ->toArray();
     return view ('pages.postslug',compact('category','tags','setting','post','next','previous','archives'));
    }

    function categorie($slugs)
    {

   $categoring=Category::where('slug',$slugs)->first();
   $category=Category::take(5)->get();
   $tags=Tag::get();
   $setting=Settings::first();
   $posts = Post::get();

        

    $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
    ->groupBy('year','month')
    ->orderByRaw('min(created_at)','desc')
    ->get()
    ->toArray();
        return view('pages.categorie',compact('categoring','category','tags','setting','post','next','previous','archives'));
    }
    
     function tagname($slugger)
    {

   $tagger=Tag::where('tags',$slugger)->first();
   $tags=Tag::get();
   $category=Category::get();
   $setting=Settings::first();
   $posts = Post::get();

        

    $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
    ->groupBy('year','month')
    ->orderByRaw('min(created_at)','desc')
    ->get()
    ->toArray();
        return view('pages.tagindex',compact('categoring','category','tags','tagger','setting','post','next','previous','archives'));
    }

     function archives(){
     $category=Category::get();
     $tags=Tag::get();
     $setting=Settings::first();

     $posts=Post::latest()
     ->filter(request(['month','year']))
     ->get();
     $posts=Post::paginate(7);

     $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
     ->groupBy('year','month')
     ->orderByRaw('min(created_at)','desc')
     ->get()
     ->toArray();

    // if($month=request('month')){
    //    $post=whereMonth('created_at',Carbon::parse($month)->month);
    // }
    // if($year=request('year')){
    //    $post=whereMonth('created_at',Carbon::parse($year)->year);
    // }


     return view ('pages.archives',compact('posts','category','tags','setting','archives'));
    }
}


