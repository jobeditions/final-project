@extends('layouts.app3')

    @section('title')
    Ajouter un Article
    @endsection

    @section('links')
     @include('partials.admin.links')
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
     
    @endsection

	  @section('content')
    
<script src="{{ URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | Formats forecolor backcolor |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        toolbar2: 'print preview | forecolor backcolor emoticons',
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
    tinymce.init(editor_config);
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
                                                <label class="control-label col-sm-1" for="tags">Étiquettes:</label>                                     
                                                   <select class="form-control select2multi" name="tags[]" multiple="multiple">
                                                     @foreach($tags as $tageg)
                                                     <option value='{{ $tageg->id }}'>{{ $tageg->tags }}</option>
                                                     @endforeach

                                                   </select>
                                              </div>


                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea class="form-control" name="content" rows="6"></textarea>
                                                  <input class="hidden" type="file" id="upload" name="image">
                                                  <input class="hidden" type="file" id="upload" name="media">
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">EXTRAIT</label>
                                                  <textarea class="form-control" name="excerpt" rows="6"></textarea>
                                                  <input class="hidden" type="file" id="upload" name="image">
                                                  <input class="hidden" type="file" id="upload" name="media">
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
         @include('partials.admin.scripts')
         <script>
          $(document).ready(function() {
          $('.select2multi').select2();
          });
        </script>
  
      @endsection
