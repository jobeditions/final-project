@extends('layouts.app3')

    @section('title')
    Ajouter un Article
    @endsection

	  @section('content')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
     selector:'textarea',
      plugins: 'autolink lists link code image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars media nonbreaking save table contextmenu directionality emoticons paste textcolor colorpicker textpattern',

     
      toolbar: 'insertfile undo redo | styleselect | bold italic |Formats forecolor backcolor | alignleft aligncenter alignright alignjustify | indent outdent | link image media',
      
     });
     </script>

	                       <div class="col-lg-12"> 
                         @include('partials.error')    
                              <section class="panel panel-default">

                             
                                  <header class="panel-heading">
                                     Écrire un article 
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="/articles" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="title">Titre</label>
                                                 <input class="form-control" type="text" id="title" name="title">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order">
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
                                              <label class="control-label col-sm-1" for="category" >Étiquettes:</label></br>
                                                   @foreach($tags as $tageg)
                                                  <label class="checkbox-inline"><input type="checkbox" name="tags[]" value="{{$tageg->id}}">{{$tageg->tags}}</label>
                                                   @endforeach
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea class="form-control" name="content" rows="6"></textarea>
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">EXTRAIT</label>
                                                  <textarea class="form-control" name="excerpt" rows="6"></textarea>
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
