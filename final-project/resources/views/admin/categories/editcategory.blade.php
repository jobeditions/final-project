@extends('layouts.app3')
    @section('title')
    Modifier une Catégorie
    @endsection

	  @section('content')

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Modifier la catégorie:{{ $cat->name }}
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="/categorie/{{$cat->id}}" method="POST" class="form-horizontal">
                                          
                                              {{csrf_field()}}
                                              {{method_field('PUT')}}

                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="name">Catégorie</label>
                                                 <input class="form-control" type="text" id="name" name="name" value="{{$cat->name}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="slug">Slug</label>
                                                 <input class="form-control" type="text" id="slug" name="slug" value="{{$cat->slug}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order" value="{{$cat->order}}">
                                              </div>



                                              <div class="col-sm-10"><p></p><p></p></div>
                                              
                                              <div class="col-sm-10">
                                                  <button class="btn- btn-primary" type="submit">Soumettre</button>
                                              </div>
                                               


                                          </form>
                                      </div>
                                      
                                  </div>
                              </section>

                              
                          </div>
                      </div>
                  </div>
              </div>
              @endsection
