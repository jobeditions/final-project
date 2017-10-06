@extends('layouts.app3')
    @section('title')
    Corbeille
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

                                 <th><i class=""></i></th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Supprimé</th>
                                 
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($posts as $posting)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td><img src="{{$posting->featured}}" width="140px" height="90px"/></td>
                                 <td>{{$posting->title}}</td>
                                 <td>{{$posting->slug}}</td>
                                 <td>{{$posting->deleted_at->format('F d,Y')}}</td>
                                 
                                  
                                 <td></td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <form  class="form-group " action="{{'/restore/'.$posting->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-success" type="submit"><i class="icon_check"></i> Restaurer</button>
                                      </form>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group" action="{{'/trash/'.$posting->id}}" method="POST">
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

