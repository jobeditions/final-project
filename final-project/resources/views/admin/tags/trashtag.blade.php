@extends('layouts.app3')
    @section('title')
      Corbeille des Étiquette
    @endsection


    @section('links')
      @include('partials.admin.links')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @endsection


	  @section('content')


              <div class="col-md-11"> 
                
                         
                        <section class="panel panel-default">

                             
                          <header class="panel-heading">
                          <b>Liste des étiquettes supprimées </b>
                          </header>   
                      </section>

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
                                 <th><i class="icon_tag"></i> Étiquette</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($tags as $tagging)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$tagging->order}}</td>
                                 <td>{{$tagging->name}}</td>
                                 <td>{{$tagging->slug}}</td>
                                 <td>{{$tagging->created_at}}</td>
                                  
                                 
                                 <td>
                                      <form  class="form-group " action="{{action('TagController@restoretrash',['id'=>$tagging->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-success" type="submit"><i class="icon_check"></i> Restaurer</button>
                                      </form>
                                 </td>
                                 <td>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group" action="{{action('TagController@kill',['id'=>$tagging->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_trash"></i> Supprimer</button>
                                      </form>
                                  <!--</div>-->
                                 
                                 </td>
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
