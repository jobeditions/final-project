<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $cat=Category::orderby('created_at','desc')->get();
        $cat=Category::paginate(10);
        return view('admin.categories.indexcategory',compact('cat'));
        //return view('admin.categories.editcategory')->('cat',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.createcategory');
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
          
          'name' => 'required|max:255',
          'order' => 'required',
          'slug' => 'required',
                     ]);

        $cat = new Category;
        $cat->name = $request->name;
        $cat->order = $request->order;
        $cat->slug = $request->slug;
        $cat->save();
        return redirect('/category');

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
        $cat=Category::find($id);
        return view('admin.categories.editcategory',compact('cat'));
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
        $cat=Category::find($id);
        $cat->name=$request->name;
        $cat->slug=$request->slug;
        $cat->order=$request->order;
        $cat->save();
        return redirect('/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Category::find($id);
        $cat->delete();

        return redirect('/category');
    }
    }
