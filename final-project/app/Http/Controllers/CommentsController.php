<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Comments;
use App\Post;
use App\Category;
use App\User;
use App\Mail\CommentsMail;
use App\Mail\CommentsPending;

use Session;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    $this->middleware('auth');
    }

    public function index()
    {
         $posts=Post::orderBy('posts.order','asc')->get();

         
         $category=Category::get();

         
         $posts=Post::paginate(4);
        return view('admin.commentaires.add',compact('posts','category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addcomment(Post $post, $user)
    {
      Comments::create([
            
             'body'=>request('body'),
             'post_id'=>$post->id,
             'user_id'=>Auth::user()->id,
             'approved' => false,
            ]);
      
      $user = User::first();
      $comments= Comments::orderBy('created_at', 'desc')->first();
     
       Session::flash('info',"Votre commentaire doit être approuvé par l'administrateur");

       \Mail::to($user)->send(new CommentsPending ($comments));
        return redirect()->back();
        

    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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