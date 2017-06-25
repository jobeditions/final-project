<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;
use App\User;
use App\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('author');
     }

    public function index()
    {
        $users=User::orderby('admin','desc')->get();
        $users=User::paginate(7);
        return view('admin.users.indexusers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.createusers');
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
          'email' => 'required|email',
          'admin' => 'required'
           ]);

         $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password'),
            'admin' => $request->admin,
            'approve' =>1 ,
        ]);

         $profile = Profile::create([
            'user_id' => $users->id,
            'avatar' => '/assets/uploads/avatar/default.png',
        ]);

         Session::flash('success','Vous avez créé une compte utilisateur avec succès');

         return redirect('/utilisateurs');

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
       //dd($request['about']);
        
        //dd($request->all());

       /* $this->validate($request,[
          
          'firstname' => 'required|min:3|max:255',
          'secondname' => 'required|min:3|max:255',
          'country' => 'required|max:255',
          'about' => 'required',
          'facebook' => 'required|url',
          'twitter' => 'required|url',
          'birthday' => 'required|max:45',
          'mobile' => 'required|max:25',
          'website' => 'required|alpha-dash|max:255',
          'occupation' => 'required|max:255',
           ]);*/

        $user=User::find($id);
   
       if($request->hasFile('avatar'))

        {
            
        $avatarImage = $request->avatar;
        $oldFile = $user->profile->avatar;
        $avatarNew = time().$avatarImage->getClientOriginalName();
        $avatarImage ->move('images/avatar/',$avatarNew);
        Storage::delete($oldFile);
        $user->profile->avatar = 'images/avatar/'.$avatarNew;
       }


       if($request->has('password'))

       {
        $user->password=bcrypt($request->password);
        }

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
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        Storage::delete($user->profile->avatar);
        $user->delete();
        Session::flash('success','Vous avez supprimer un compte avec succès');

         return redirect('/utilisateurs');
    }


public function util($id)
    {
        $user = User::find($id);

        $user->approve=1;
        $user->save();
        Session::flash('success','Vous avez ajouter un utilisateur avec succès');

         return redirect('/utilisateurs');

    }
    public function noutil($id)
    {
        $user = User::find($id);

        $user->approve=0;
        $user->save();
        Session::flash('success','Vous avez retirer un utilisateur avec succès');

         return redirect('/utilisateurs');

    }

}
