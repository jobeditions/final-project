<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use App\Category;
use App\Tag;
use App\Comments;

class IndexController extends Controller
{
    public function __construct(){

     
        $this->middleware('auth');
     }

    public function articleindex()
    {
         $posts=Post::orderBy('order','asc')->get();

         
         $category=Category::get();

         $tags=Tag::get();
         $posts=Post::paginate(4);
        return view('admin.posts.articleindex',compact('posts','category','tags'));


    }


    public function commentsindex()
    {
        
        $posts=Post::orderBy('order','asc')->get();

         
         $comments=Comments::get();

        return view('admin.commentaires.commentsindex',compact('posts','comments'));
    }


    public function userindex()
    {
        $users=User::orderby('admin','desc')->get();
        $users=User::paginate(7);
        return view('admin.users.userindex',compact('users'));
    }
}
