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
        return redirect('admin/categorie');

    }
    
    public function edit($id)
    {
        $cat=Category::find($id);
        return view('admin.categories.editcategory',compact('cat'));
    }

    public function update(Request $request, $id)
    {
        $cat=Category::find($id);
        $cat->name=$request->name;
        $cat->slug=$request->slug;
        $cat->order=$request->order;
        $cat->save();
        Session::flash('success','La catégorie a été modifiée avec succès');
        return redirect('admin/categorie');
    }

   
    public function destroy($id)
    {
        $cat=Category::find($id);
        $cat->delete();
        Session::flash('success','La catégorie a été supprimée avec succès');
        return redirect('admin/categorie');

    }


    public function trash()
    {
         $cat=Category::onlyTrashed()->get();
         
        return view('admin.categories.trashcategory',compact('cat'));
    }
    public function restoretrash($id)
    {
        $cat=Category::onlyTrashed()->where('id',$id)->first();
        $cat->restore();
        Session::flash('success','La catégorie a été restaurer avec succès');
        return redirect()->back();
    }


    public function kill($id)
    {
        $cat=Category::onlyTrashed()->where('id',$id)->first();
        $cat->forcedelete();
        Session::flash('success','La catégorie a été supprimée avec succès');
        return redirect()->back();
    }
    }
