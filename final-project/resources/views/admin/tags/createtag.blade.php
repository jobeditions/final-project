@extends('layouts.app3')
    @section('title')
    Ajouter une Étiquette 
    @endsection
	  @section('content')

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Ajouter une Étiquette
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="{{route('tags.store')}}" method="POST" class="form-horizontal" >
                                              {{csrf_field()}}

                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="tags">Étiquette</label>
                                                 <input class="form-control" type="text" id="tags" name="tags">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order">
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
