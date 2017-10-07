@extends('layouts.app3')
    @section('title')
    Ajouter un Compte
    @endsection
  
    @section('links')
     @include('partials.admin.links')
    @endsection

    @section('content')


                         <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Ajouter une catégorie 
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="{{route('utilisateurs.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}

                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="name"> Utilisateur</label>
                                                 <input class="form-control" type="text" id="name" name="name">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="email"> MailÉlectronique</label>
                                                 <input class="form-control" type="email" id="email" name="email">
                                              </div>
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="category" >Catégorie</label>
                                                 <select class="form-control" id="category" name="admin">
                                                   
                                                   <option value="0">Utilisateur</option>
                                                  
                                                 </select>
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
     @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')
     @endsection

