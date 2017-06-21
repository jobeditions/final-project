@extends('layouts.app3')
@section('title')
Modifier une Categorie
@endsection

	  @section('content')


              <div class="col-md-3"> 
                
                         @include('partials.error')    
                        <section class="panel panel-default">

                             
                          <header class="panel-heading">
                          Ajouter une catégorie 
                          </header>
                                  

                          <div class="panel-body">
                              <div class="form">
                                    <form action="{{route('categorie.store')}}" method="POST" class="form-horizontal" >
                                              {{csrf_field()}}

                                              
                                              <div class="col-sm-12">
                                                 <label class="control-label col-sm-1" for="name">Catégorie</label>
                                                 <input class="form-control" type="text" id="name" name="name">
                                              </div>

                                              <div class="col-sm-12">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order">
                                              </div>



                                              <div class="col-sm-12"><p></p><p></p></div>
                                              
                                              <div class="col-sm-10">
                                                  <button class="btn- btn-primary" type="submit">Soumettre</button>
                                              </div>
                                               


                                    </form>
                              </div>
                          </div>
                              
                      </section>

              </div>
    
                 
	             <div class="row">
                  <div class="col-md-8">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Catégories
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 
                                 
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($cat as $categ)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$categ->order}}</td>
                                 <td>{{$categ->name}}</td>
                                 <td>{{$categ->slug}}</td>
                                 <td>{{$categ->created_at}}</td>
                                  
                                 
                                 <td>
                                 @if($categ->id==1)
                                 <div class="btn-group"></div>
                                 @else
                                  <div class="btn-group">
                                  <div class="btn-group">
                                      <a class="btn btn-primary btn-s" href="{{'/categorie/'.$categ->id.'/edit'}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/categorie/'.$categ->id}}" method="POST">
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
                        {{$cat->links()}}
                      </section>
                  </div>
              </div>
              
              
              @endsection
