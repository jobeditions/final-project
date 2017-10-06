@extends('layouts.app3')

    @section('title')
    Modérer un Commentaire
    @endsection

    @section('links')
     @include('partials.admin.links')
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
                                 
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      
                  </div>
              </div>
    @endsection

    @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')
    @endsection

