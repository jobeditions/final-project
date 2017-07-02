<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;
use App\Settings;
use App\User;

class SettingsController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    $this->middleware('author');
    }

    public function index()
    {
       
        $setting = Settings::first();
        return view ('admin.settings.settings',compact('setting'));
    }
    public function index1()
    {
       
        $setting = Settings::first();
        return view ('admin.settings.settings1',compact('setting'));
    }

    public function index2()
    {
       
        $setting = Settings::first();
        return view ('admin.settings.setting2',compact('setting'));
    }

    public function updating(Request $request)
    {
        //dd($request->all());

      
           $this->validate($request,[
          
          'site_name' => 'sometimes|min:3|max:255',
          'title' => 'sometimes|min:3|max:255',
          'propos_title1' => 'sometimes|min:3|max:255',
          'propos_title2' => 'sometimes|min:3|max:255',
          'author_name' => 'sometimes|min:3|max:255',
          'description' => 'sometimes|max:250',
          'contact_email' => 'sometimes|max:255',
          'contact_number' => 'sometimes',
          'image1' => 'sometimes|image',
          'image2' => 'sometimes|image',
          'image3' => 'sometimes|image',
          'image4' => 'sometimes|image',
          'image5' => 'sometimes|image',
          'para1' => 'sometimes|max:1500',
          'para2' => 'sometimes|max:1500',
          'para3' => 'sometimes|max:1500',
          
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
        
       if($request->hasFile('image5'))

        {
         $featuredImage5 = $request->image5;
        $featuredNew5 = time().$featuredImage5->getClientOriginalName();
        $oldfile5 = $setting->image5;
        $featuredImage5 ->move('images/settings',$featuredNew5);
        $setting->image5 = 'images/settings/'.$featuredNew5;
        Storage::delete($oldfile5);
       } 

        if ($request->has('site_name')) 
        {
          $setting->site_name=$request->site_name;
        }
        if ($request->has('title')) 
        {
          $setting->title=$request->title;
        }
        if ($request->has('description')) 
        {
          $setting->description=$request->description;
        }
         if ($request->has('author_name')) 
        {
          $setting->author_name=$request->author_name;
        }

        if ($request->has('contact_number')) 
        {
          $setting->contact_number=$request->contact_number;
        }
        if ($request->has('contact_email')) 
        {
          $setting->contact_email=$request->contact_email;
        }
        if ($request->has('address')) 
        {
          $setting->address=$request->address;
        }
         if ($request->has('propos_title1')) 
        {
          $setting->propos_title1=$request->propos_title1;
        }
         if ($request->has('propos_title2')) 
        {
          $setting->propos_title2=$request->propos_title2;
        }
         if ($request->has('para1')) 
        {
          $setting->para1=$request->para1;
        }
         if ($request->has('para2')) 
        {
          $setting->para2=$request->para2;
        }
         if ($request->has('para3')) 
        {
          $setting->para3=$request->para3;
        }
        
        $setting->save();
        Session::flash('success','Les Paramétres ont été modifiées avec succès');
        return redirect()->back();


       
    }
}
