@extends('layouts.app3')

    @section('title')
    Ajouter un Commentaire
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


                                 <th><i class=""></i>N°</th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Comments</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Ajouter un Commentaire</a></th>
                              </thead>
                              <tbody>
                              
                                @foreach($posts as $posting)

                              <tr>
                                 
                                 <td>{{$posting->order}}</td>
                                 <td><a href="{{route('single.posting',['slug'=>$posting->slug])}}"><img src="{{$posting->featured}}" width="140px" height="90px"/></a></td>
                                 
                                 <td>{{$posting->title}}</td>
                                 <td>{{$posting->category->name}}</td>

                                 <td>{{$posting->comments->count()}}</td>
                                 <td>{{$posting->created_at->format('F d,Y')}}</td>
                                 <td>
                                   
                                   </td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <a class="btn btn-primary btn-s" href="{{route('single.postslugger',['slug'=>$posting->slug])}}"><i class="icon_plus_alt2"></i> Commentaire</a>
                                  </td>
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      {{ $posts->links() }}
                  </div>
              </div>
             
              
              @endsection
