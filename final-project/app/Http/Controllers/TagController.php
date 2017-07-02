<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('author');
     }

    
    public function index()
    {
        $tags=Tag::orderby('order','asc')->get();
        $tags=Tag::paginate(7);
        return view ('admin.tags.indextag',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
          
          'tags' => 'required|max:255',
          'order'=>  'required|integer',
                     ]);

         $tags = Tag::create([
            'tags' => $request->tags,
            'order' => $request->order,
        ]);

       
        Session::flash('success','Vous avez créé la étiquette avec succès');
        return redirect('/tags');
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
        $tags=Tag::find($id);
        return view('admin.tags.edittag',compact('tags'));
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
          
          'tags' => 'required|max:255',
          'order'=>  'required',
                     ]);

         $tags = Tag::find($id);
         $tags->tags=$request->tags;
         $tags->order=$request->order;
         $tags->save();
       
        Session::flash('success','Vous avez modifiée la tag avec succès');
        return redirect('/tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags=Tag::find($id);
        $tags=posts()->detach();
        $tags->delete();
        Session::flash('success','La tag a été supprimée avec succès');
        return redirect('/tags');
    }
}
