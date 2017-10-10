@extends('layouts.app3')
    @section('title')
     Modifier/Tags
    @endsection

    @section('links')
     @include('partials.admin.links')
    @endsection

	  @section('content')

    @section('content')

                         <div class="col-md-12"> 
                         @include('partials.error')    
                          <section class="panel panel-default">

                             <header class="panel-heading">
                                <b>Ajouter une Étiquettes</b>
                          

                                  <a class="btn btn-primary btn-s pull-right" data-toggle="modal" data-target="#myModal" ><i class="icon_plus_alt2"></i>  Ajouter</a>
                            </header>
                                  
                          </section>

                              
                          </div>
                      </div>
                  </div>
              </div>

	             <div class="row">
                  <div class="col-md-11">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Étiquettes
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Étiquettes</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th><i class="icon_calendar"></i> Modifié le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($tags as $tageg)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$tageg->order}}</td>
                                 <td>{{$tageg->tags}}</td>
                                 <td>{{$tageg->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 <td>
                                 @if($tageg->id==1)
                                 <div class="btn-group"></div>
                                 @else
                                  <div class="btn-group">
                                  <div class="btn-group">
                                      <a class="btn btn-primary btn-s" href="{{action('TagController@edit',['id'=>$tageg->id])}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{action('TagController@destroy',['id'=>$tageg->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i>  Supprimer</button>
                                      </form>
                                  </div>
                                  @endif
                                  </td>
                              </tr>
                             
                              @endforeach
                                                     
                           </tbody>
                        </table>
                         {{$tags->links()}}
                      </section>
                  </div>
              </div>
               @include('partials.admin.modals.modalcreatetags')
      @endsection
      @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')
     @endsection
