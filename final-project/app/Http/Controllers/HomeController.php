<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user=User::get();
        $comments=Comments::get();
        $posts=Post::get();

        return view('home',compact('user','comments','posts'));
    }

    public function pagenotfound()
    {
        return view('errors.404');
    }
}
