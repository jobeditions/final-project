<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentadminController extends Controller
{
    
    public function __construct(){

        $this->middleware('author');
        $this->middleware('auth');
     }



    public function destroy($id)
    {
        $comments = Comments::find($id);
        $comments->delete();
        Session::flash('success','Vous avez supprimer un commentaire avec succès');

         return redirect()->back();
    }
  public function moderate()
    {   

        $posts=Post::orderBy('order','asc')->get();

         
         $comments=Comments::get();

        return view('admin.commentaires.moderate',compact('posts','comments'));
    }
    public function util($id)
    {
        $comments = Comments::find($id);
        $user_id = $comments->user->id;
        $user = User::find($user_id);
        $comments->approved=true;
        $comments->save();
        Session::flash('success','Vous avez ajouter un commentaire avec succès');

         \Mail::to($user)->send(new CommentsMail ($comments));

         return redirect()->back();

         
    }

    public function noutil($id)
    {
        $comments = Comments::find($id);

        $comments->approved=false;
        $comments->save();
        Session::flash('success','Vous avez retirer un commentaire avec succès');

         return redirect()->back();

    }
    public function hellcat()
    {   

        $posts=Post::orderBy('order','asc')->get();

         
         $comments=Comments::get();

        return view('admin.commentaires.hellcat',compact('posts','comments'));
    }

}
}
