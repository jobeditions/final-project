<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderby('admin','desc')->get();
        $users=User::paginate(10);
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
           ]);

         $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password'),
            'admin' => $request->admin,
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
        $user = User::find($id);

        $user->delete();
        Session::flash('success','Vous avez supprimer un compte avec succès');

         return redirect('/utilisateurs');
    }


public function author($id)
    {
        $user = User::find($id);

        $user->admin=1;
        $user->save();
        Session::flash('success','Vous avez ajouter un auteur avec succès');

         return redirect('/utilisateurs');

    }

public function user($id)
    {
        $user = User::find($id);

        $user->admin=0;
        $user->save();
        Session::flash('success','Vous avez ajouter un utilisateur avec succès');

         return redirect('/utilisateurs');

    }

}
