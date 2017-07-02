@extends('layouts.app3')
@section('title')
Paramétres
@endsection
@section('content')

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Paramétres|Page d'Accueil
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                         
                                              <form action="/settings/updating" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              

                                               <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="site_name">Titre_du_site</label>
                                                 <input class="form-control" type="text" id="site_name" name="site_name" value="{{$setting->site_name}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image1"> Image:banniére_en_haut</label>
                                                 <input class="form-control" type="file" id="image1" name="image1">
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image2"> Image:bannière_au_milieu</label>
                                                 <input class="form-control" type="file" id="image2" name="image2">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image3"> Image:bannière_en_bas</label>
                                                 <input class="form-control" type="file" id="image3" name="image3">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image4"> Image_sur_la_barre_au_gauche</label>
                                                 <input class="form-control" type="file" id="image4" name="image4">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="title">Titre_du_Description</label>
                                                 <input class="form-control" type="text" id="title" name="title" value="{{$setting->title}}">
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">La_Description</label>
                                                  <textarea class="form-control" name="description" rows="6">{{$setting->description}}</textarea>
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