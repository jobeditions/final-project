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
         $posts=Post::orderBy('order','desc')->get();
         $posts=Post::paginate(4);
         $category=Category::get();
         $setting=Settings::first();
         $tags=Tag::get();
         $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at)','desc')
         ->get()
         ->toArray();
         return view('pages.blog',compact('posts','postss','category','tags','setting','archives'));
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
     ->orderByRaw('min(created_at)','des')
     ->get()
     ->toArray();
     return view ('pages.postslug',compact('category','tags','setting','post','next','previous','archives'));
    }

    function sluggerpost($slug){
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
     ->orderByRaw('min(created_at)','des')
     ->get()
     ->toArray();
     return view ('pages.postslugger',compact('category','tags','setting','post','next','previous','archives'));
    }

    function categorie($slugs)
    {

   $categoring=Category::where('slug',$slugs)->first();
   $category=Category::take(5)->get();
   $tags=Tag::get();
   $setting=Settings::first();
   $posts = Post::get();
   $posts = Post::paginate(6);     

    $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
    ->groupBy('year','month')
    ->orderByRaw('min(created_at)','desc')
    ->get()
    ->toArray();
        return view('pages.categorie',compact('categoring','category','tags','setting','posts','next','previous','archives'));
    }
    
     function tagname($slugger)
    {

   $tagger=Tag::where('tags',$slugger)->first();
   $tags=Tag::get();
   $category=Category::get();
   $setting=Settings::first();
   $posts = Post::get();
   $posts = Post::paginate(6);

    $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
    ->groupBy('year','month')
    ->orderByRaw('min(created_at)','desc')
    ->get()
    ->toArray();
        return view('pages.tagindex',compact('categoring','category','tags','tagger','setting','posts','next','previous','archives'));
    }

     function archiving(){
     $category=Category::get();
     $tags=Tag::get();
     $setting=Settings::first();

      $archives=Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
     ->groupBy('year','month')
     ->orderByRaw('min(created_at)','desc')
     ->get()
     ->toArray();
     $postingg=Post::latest();
     //->filter(request(['month','year']))
     //->get();
     
    // $postingg=Post::paginate(3);

     if($month=request('month')){
    $postingg->whereMonth('created_at',Carbon::parse($month)->month);
    }
    if($year=request('year')){
    $postingg->whereYear('created_at',Carbon::parse($year)->year);
    }
    $postingg = $postingg->get();
    $postingg=Post::paginate(3);
    

     return view ('pages.archives',compact('postingg','category','tags','setting','archives'));
    }
}


