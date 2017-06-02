@extends('layouts.app3')

	  @section('content')

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Modifier l'article : {{$posts->title}}
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="/posts/{{$posts->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              {{method_field('PUT')}}
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="title">Titre</label>
                                                 <input class="form-control" type="text" id="title" name="title" value="{{$posts->title}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="slug">Slug</label>
                                                 <input class="form-control" type="text" id="slug" name="slug" value="{{$posts->slug}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="featured" >Image</label>
                                                 <input class="form-control" type="file" id="featured" name="featured">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="category" >Catégorie</label>
                                                 <select class="form-control" id="category" name="category_id">
                                                 @foreach($categories as $cat)
                                                 <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                 @endforeach
                                                 </select>
                                              </div>
                                                  
                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea class="form-control" name="content" rows="6" value="{{$posts->content}}"></textarea>
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">EXTRAIT</label>
                                                  <textarea class="form-control" name="excerpt" rows="6" value="{{$posts->excerpt}}"></textarea>
                                              </div>

                                              <div class="col-sm-10"><p></p><p></p></div>
                                              
                                              <div class="col-sm-10">
                                                 <button class="btn- btn-primary" type="submit">Modifier</button>
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
