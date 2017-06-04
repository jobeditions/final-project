<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Post;
use App\Category;

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
        $posts=Post::paginate(10);
        return view('admin.posts.indexpost',compact('posts'));
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
        if($categories->count()==0)
        {
            Session::flash('success','Vous devez créé une catégorie pour des articles');
            return redirect()->back();
            
        }

        return view('admin.posts.createpost',compact('categories'));
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
          'featured' => 'required|image',
          'content' => 'required',
          'excerpt' => 'required',
          'category_id' => 'required',
          'slug' => 'required|alpha_dash|min:5|max:255',
           ]);

        //dd($request->all());

        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $featuredImage ->move('assets/uploads/posts',$featuredNew);

        //$post = new Post;
        //$post->title = $request->title;
        //$post->content = $request->content;
        //$post->excerpt = $request->excerpt;
        //$post->featured ='assets/uploads/posts/'.$featuredNew;
        //$post->category_id = $request->category_id;
        //$post->save();

        $posts = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'assets/uploads/posts/'.$featuredNew,
            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
        ]);
    Session::flash('success','Vous avez créé une article avec succès');

    return redirect('/articles');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $categories=Category::all();
        return view('admin.posts.editpost',compact('posts','categories'));
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
          //'category_id' => 'required',
          'slug' => 'required|alpha_dash|min:5|max:255',
           ]);
    if($request->hasFile('featured'))

        {
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $featuredImage ->move('assets/uploads/posts',$featuredNew);
        $posts->featured = 'assets/uploads/posts/'.$featuredNew;
    }

        $posts=Post::find($id);
        $posts->title=$request->title;
        $posts->slug=$request->slug;
        $posts->content=$request->content;
        $posts->excerpt=$request->excerpt;
        $posts->category_id=$request->category_id;

        $posts->save();
        Session::flash('success','La catégorie a été modifiée avec succès');
        return redirect('/posts');
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
        return redirect('/posts');
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
        return redirect('/posts');
    }
}
