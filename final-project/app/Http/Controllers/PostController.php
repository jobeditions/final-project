<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Session;
use Purifier;
use App\Post;
use App\Category;
use App\User;
use App\Tag;
use App\Settings;
use Image;

class PostController extends Controller
{

    
    public function __construct(){

        $this->middleware('author');
        $this->middleware('auth');
     }

    public function index()
    {
         $posts=Post::orderBy('posts.order','DESC')->paginate(4);

         
         $category=Category::get();

         $tags=Tag::get();
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
        //dd(request()->all());

        $this -> validate($request,[
          
          'title' => 'required|max:255',
          'featured' => 'sometimes|image',
          'content' => 'required',
          'excerpt' => 'required',
          'category_id' => 'required|integer',
          
           ]);

        /*dd($request->all());*/
        if($request->hasFile('featured'))
        {
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $featuredImage ->move('images/image',$featuredNew);
        }
        /*if($request->hasFile('featured')){
            $image = $request->file('featured');
            $filename=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/image' . $filename);
            $image = save($location);

        }*/

        $posts = Post::create([
            'title' => $request->title,
            'order' => $request->order,
            'content' => Purifier::clean($request->content, 'youtube'),
            'featured' => '/images/image/'.$featuredNew,
            //'featured'=>$filename,
            'excerpt' => Purifier::clean($request->excerpt, 'youtube'),
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
        ]);

        $posts->tags()->attach($request->tags);
    Session::flash('success','Vous avez créé une article avec succès');

    return redirect('admin/articles');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
          'order' => 'required',
          'content' => 'required',
          'excerpt' => 'required',
          'slug' => 'required',
          'featured' => 'sometimes|image',
          'category_id' => 'required|integer',
          ]);

        $posts=Post::find($id);
       

       if($request->hasFile('featured'))

        {
        
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $oldfile = $posts->featured;
        $featuredImage ->move('images/image',$featuredNew);
        $posts->featured = 'images/image/'.$featuredNew;
        Storage::delete($oldfile);
       }

        $posts->title=$request->title;
        $posts->order=$request->order;
        $posts->slug=$request->slug;

        $posts->content=Purifier::clean($request->content, 'youtube');
        $posts->excerpt=Purifier::clean($request->excerpt, 'youtube');
        $posts->category_id=$request->category_id;
        $posts->save();

        $posts->tags()->sync($request->tags);
        
        Session::flash('success','La catégorie a été modifiée avec succès');
        return redirect('admin/articles');
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
        return redirect('admin/articles');
    }

    public function kill($id)
    {
        $posts=Post::onlyTrashed()->where('id',$id)->first();
        Storage::delete($posts->featured);
        $posts->tags()->detach();
        $posts->forcedelete();
        Session::flash('success','Article a été supprimée avec succès');
        return redirect('admin/trash');
    }

    public function restoretrash($id)
    {
        $posts=Post::onlyTrashed()->where('id',$id)->first();
        $posts->restore();
        Session::flash('success','Article a été restaurer avec succès');
        return redirect('admin/articles');
    }
}
