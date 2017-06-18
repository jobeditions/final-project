<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;
use App\Settings;
use App\User;

class SettingsController extends Controller
{
    //public function __construct(){
    //	this->middleware('admin');
    //}

    public function index()
    {
       
        $setting = Settings::first();
        return view ('admin.settings.settings',compact('setting'));
    }

    public function updating(Request $request)
    {
        //dd($request->all());

      
         $this -> validate($request,[
          
          'site_name' => 'required|max:255',
          'title' => 'required',
          'description' => 'required',
          'image1' => 'sometimes|image',
          'image2' => 'sometimes|image',
          'image3' => 'sometimes|image',
          'image4' => 'sometimes|image',
          'contact_number' => 'required',
          'contact_email' => 'required', 
          'address' => 'required',
          
           ]);
       $setting = Settings::first();

       if($request->hasFile('image1'))

        {
         $featuredImage1 = $request->image1;
        $featuredNew1 = time().$featuredImage1->getClientOriginalName();
        $oldfile1 = $setting->image1;
        $featuredImage1 ->move('images/settings',$featuredNew1);
        $setting->image1 = 'images/settings/'.$featuredNew1;
        Storage::delete($oldfile1);
       }

       if($request->hasFile('image2'))

        {
         $featuredImage2 = $request->image2;
        $featuredNew2 = time().$featuredImage2->getClientOriginalName();
        $oldfile2 = $setting->image2;
        $featuredImage2 ->move('images/settings',$featuredNew2);
        $setting->image2 = 'images/settings/'.$featuredNew2;
        Storage::delete($oldfile2);
       }

       if($request->hasFile('image3'))

        {
         $featuredImage3 = $request->image3;
        $featuredNew3 = time().$featuredImage3->getClientOriginalName();
        $oldfile3 = $setting->image3;
        $featuredImage3 ->move('images/settings',$featuredNew3);
        $setting->image3 = 'images/settings/'.$featuredNew3;
        Storage::delete($oldfile3);
       }

       if($request->hasFile('image4'))

        {
         $featuredImage4 = $request->image4;
        $featuredNew4 = time().$featuredImage4->getClientOriginalName();
        $oldfile4 = $setting->image4;
        $featuredImage4 ->move('images/settings',$featuredNew4);
        $setting->image4 = 'images/settings/'.$featuredNew4;
        Storage::delete($oldfile4);
       }

        $setting->site_name=$request->site_name;
        $setting->title=$request->title;
        $setting->description=$request->description;
        $setting->contact_number=$request->contact_number;
        $setting->contact_email=$request->contact_email;
        $setting->address=$request->address;
       
        $setting->save();
        Session::flash('success','Les Paramétres ont été modifiées avec succès');
        return redirect()->back();


       
    }
}
