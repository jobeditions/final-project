@extends('layouts.app3')
@section('title')
Paramétres
@endsection
@section('content')

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Paramétres
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                         
                                              <form action="/settings/updating" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="author_name">Nom_de_Auteur</label>
                                                 <input class="form-control" type="text" id="author_name" name="author_name" value="{{$setting->author_name}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="contact_number">Numéro_de_Contact</label>
                                                 <input class="form-control" type="text" id="contact_number" name="contact_number" value="{{$setting->contact_number}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="contact_email">Mail_électronique</label>
                                                 <input class="form-control" type="text" id="contact_email" name="contact_email" value="{{$setting->contact_email}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="address">Adresse</label>
                                                 <input class="form-control" type="text" id="address" name="address"  value="{{$setting->address}}">
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