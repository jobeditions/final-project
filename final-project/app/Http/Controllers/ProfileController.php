<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $users=User::orderby('admin','desc')->get();
     $profile = Profile::get();   
     return view('admin.users.profile',compact('users','profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //$user=User::find($id);
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
         //dd($request['about']);
        
        //dd($request->all());

        /*$this -> validate($request,[
          
          'firstname' => 'required|min:3|max:255',
          'lastname' => 'required|min:3|max:255',
          'country' => 'required|max:255',
          'about' => 'required',
          'facebook' => 'required|url',
          'twitter' => 'required|url',
          'birthday' => 'required|max:45',
          'mobile' => 'required|max:25',
          'website' => 'required|alpha-dash|max:255',
          'occupation' => 'required|max:255',
           ]);

        $user=User::find($id);
   
    if($request->hasFile('avatar'))

        {
        $avatarImage = $request->avatar;
        $avatarNew = time().$avatarImage->getClientOriginalName();
        $avatarImage ->move('assets/uploads/avatar',$avatarNew);
        $user->profile->avatar = 'assets/uploads/avatar/'.$avatardNew;
    }
    if($request->has('password'))

       {
        $user->password=bcrypt($request->password);
        }

       // $posts=Post::find($id);
        $user->password;
        $user->profile->firstname=$request->firstname;
        $user->profile->lastname=$request->lastname;
        $user->profile->country=$request->country;
        $user->profile->about=$request->about;
        $user->profile->facebook=$request->facebook;
        $user->profile->twitter=$request->twitter;
        $user->profile->birthday=$request->birthday;
        $user->profile->mobile=$request->mobile;
        $user->profile->website=$request->website;
        $user->profile->occupation=$request->occupation;

        $user->save();
        $user->profile->save();
        Session::flash('success','Votre Compte a été modifiée avec succès');
        return redirect('/profile');
    */
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
