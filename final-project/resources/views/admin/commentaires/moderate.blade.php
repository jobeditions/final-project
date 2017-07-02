@extends('layouts.app3')

    @section('title')
    Modérer un Commentaire
    @endsection

	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Commentaires
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>


                                 <th><i class="icon_image"></i>Article</th>
                                 <th><i class="icon_document"></i> Titre-Artcle</th>
                                 <th><i class="icon_document_alt"></i> Commentaire</th>
                                 <th><i class="icon_profile"></i> Auteur</th>
                                 <th><i class="icon_profile"></i> Auteur-Id</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                              
                                @foreach($comments as $commenting)

                              <tr>
                                 
                                 <td><a href="{{route('single.posting',['slug'=>$commenting->post->slug])}}"><img src="{{$commenting->post->featured}}" width="140px" height="90px"/></a></td>
                                 <td>{{$commenting->post->title}}</td>
                                 
                                 
                                 <td>{{$commenting->body}}</td>
                                 <td>{{$commenting->user->name}}</td>
                                 <td><img src="{{$commenting->user->profile->avatar}}" width="80px" height="70px"/></td>
                                 
                                 <td>{{$commenting->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 <td>
                                  <div class="btn-group">

                                       @if($commenting->approved)
                                      <a class="btn btn-success btn-s " href="{{'/no-moderate/'.$commenting->id}}"><i class="icon_plus_alt2"></i>Retire </a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/commentaires/'.$commenting->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger " type="submit"><i class="icon_trash"></i>  Corbeille</button>
                                      </form>
                                      @else
                                      <a class="btn btn-primary btn-s" href="{{'/moderate/'.$commenting->id}}"><i class="icon_plus_alt2"></i> Permettre</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/commentaires/'.$commenting->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_trash"></i>  Corbeille</button>
                                      </form>
                                      @endif
                                      </div>
                                  </td>
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      
                  </div>
              </div>
              @endsection
