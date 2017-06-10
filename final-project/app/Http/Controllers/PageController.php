<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
     function frontpage(){
        return view ('pages.welcome');
    }

    //function archive(){
    	//return view ('pages.archives');
   // }
    function blog(){
    	return view ('pages.blog');
    }
    function contact(){
    	return view ('pages.contact');
    }

    function about(){
     return view ('pages.about');
    }
    //function login(){
    	//return view ('pages.welcome');
    //}
}


