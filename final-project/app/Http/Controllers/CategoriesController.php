<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use Carbon\Carbon;

class CategoriesController extends Controller
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
        $cat=Category::orderby('order','asc')->get();
        $cat=Category::paginate(7);

        return view('admin.categories.indexcategory',compact('cat'));
        
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
        
       //dd($request->all());

        $this -> validate($request,[
          
          'name' => 'required|max:255',
          'order' => 'required',
                     ]);

        $cat = new Category;
        $cat->name = $request->name;
        $cat->order = $request->order;
        $cat->slug = str_slug($request->name);
        $cat->save();
        Session::flash('success','Vous avez créé la catégorie avec succès');
        return redirect('/categorie');

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
        Session::flash('success','La catégorie a été modifiée avec succès');
        return redirect('/categorie');
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
        Session::flash('success','La catégorie a été supprimée avec succès');
        return redirect('/categorie');

    }
    }
