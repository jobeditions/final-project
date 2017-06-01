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
        //
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
            Session::flash('info','Vous devez créé une catégorie pour des articles');
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
          'postslug' => 'required',
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

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'assets/uploads/posts/'.$featuredNew,
            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'postslug' => str_slug('title'),
        ]);
    Session::flash('success','Vous avez créé la catégorie avec succès');

    return redirect()->back();
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
