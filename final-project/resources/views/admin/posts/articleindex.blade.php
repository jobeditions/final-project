@extends('layouts.app3')

    @section('title')
    Modifier un Article
    @endsection


    @section('links')
     @include('partials.admin.links')
    @endsection

	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Catégories
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>


                                 <th><i class=""></i>N°</th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Étiquettes</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                        
                              </thead>
                              <tbody>
                              
                              @foreach($posts as $posting)

                              <tr>
                                 
                                 <td>{{$posting->order}}</td>
                                 <td><a href="{{action('PageController@slugpost',['slug'=>$posting->slug])}}"><img src="{{$posting->featured}}" width="140px" height="90px"/></a></td>
                                 
                                 <td>{{$posting->title}}</td>
                                 <td> {{$posting->category->name}} </td>
                                 <td>
                                   @foreach($posting->tags as $taging)
                                   {{$taging->tags}}</br>
                                   @endforeach
                                   </td>
                                 <td>{{$posting->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      {{ $posts->links() }}
                  </div>
              </div>
    @endsection

    @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')
    @endsection
