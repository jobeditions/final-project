<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Session;
use App\Post;
use App\Category;
use App\User;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $posts=Post::orderby('created_at','desc')->get();
         $category=Category::get();
         $tags=Tag::get();
         $posts=Post::paginate(10);
        return view('admin.posts.indexpost',compact('posts','category','tags'));
    }

    public function trash()
    {
         $posts=Post::onlyTrashed()->get();
    
        return view('admin.posts.trashpost',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {  
       
        $categories=Category::all();
        $tags=Tag::all();
        if($categories->count()==0)
        {
            Session::flash('success','Vous devez créé une catégorie pour des articles');
            return redirect()->back();
            
        }

        if($tags->count()==0)
        {
            Session::flash('success','Vous devez créé une tag pour des articles');
            return redirect()->back();
            
        }

        return view('admin.posts.createpost',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this -> validate($request,[
          
          'title' => 'required|max:255',
          'featured' => 'sometimes|image',
          'content' => 'required',
          'excerpt' => 'required',
          'category_id' => 'required',
          'tags'=> 'required',
          
           ]);

        /*dd($request->all());*/
        if($request->hasFile('featured'))
        {
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $featuredImage ->move('images/image',$featuredNew);
        }

        $posts = Post::create([
            'title' => $request->title,
            'order' => $request->order,
            'content' => $request->content,
            'featured' => 'images/image/'.$featuredNew,
            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
        ]);

        $posts->tags()->attach($request->tags);
    Session::flash('success','Vous avez créé une article avec succès');

    return redirect('/articles');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $post = Post::find($id);
         $category=Category::get();
        return view('pages.posts',compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::find($id);
        $categories=Category::get();
        $tags=Tag::get();
        return view('admin.posts.editpost',compact('posts','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this -> validate($request,[
          
          'title' => 'required|max:255',
          'content' => 'required',
          'excerpt' => 'required',
          'slug' => 'required',
          'featured' => 'sometimes|image',
          //'category_id' => 'required',
          
           ]);

        $posts=Post::find($id);
       

       if($request->hasFile('featured'))

        {
        //add new photo
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        //Storage::delete();
        $featuredImage ->move('images/image',$featuredNew);
        $posts->featured = 'images/image/'.$featuredNew;
       }

        $posts->title=$request->title;
        $posts->slug=$request->slug;
        $posts->content=$request->content;
        $posts->excerpt=$request->excerpt;
        $posts->category_id=$request->category_id;

        $posts->save();
        Session::flash('success','La catégorie a été modifiée avec succès');
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Post::find($id);
        $posts->delete();
        Session::flash('success','Article a été supprimée avec succès');
        return redirect('/articles');
    }

    public function kill($id)
    {
        $posts=Post::onlyTrashed()->where('id',$id)->first();
        $posts->forcedelete();
        Session::flash('success','Article a été supprimée avec succès');
        return redirect('/trash');
    }

    public function restoretrash($id)
    {
        $posts=Post::onlyTrashed()->where('id',$id)->first();
        $posts->restore();
        Session::flash('success','Article a été restaurer avec succès');
        return redirect('/articles');
    }
}
