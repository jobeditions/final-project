@extends('layouts.app3')

    @section('title')
    Modifier un Article
    @endsection

	  @section('content')
      
      <!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

     <script>tinymce.init({
       selector:'textarea',
       plugins: 'advlist autolink lists link code image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars media nonbreaking save table contextmenu directionality emoticons paste textcolor colorpicker textpattern',

     
       toolbar1: 'insertfile undo redo | styleselect | bold italic |Formats forecolor backcolor | alignleft aligncenter alignright alignjustify | indent outdent | link image media',
       toolbar2: 'print preview | forecolor backcolor emoticons',

       image_advtab: true,
       file_picker_callback: function(callback, value, meta) {
       if (meta.filetype == 'image') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
         
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };

          reader.readAsDataURL(file);
         });
        }
       },
      file_picker_callback: function(callback, value, meta) {
       if (meta.filetype == 'media') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
         
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };
          
          reader.readAsDataURL(file);
         });
        }
       },
     });
      </script>-->
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
                                     Modifier l'article : {{$posts->title}}
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="/articles/{{$posts->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
                                              <label class="control-label col-sm-1" for="category" >Étiquettes:</label></br>
                                                   @foreach($tags as $tageg)
                                                  <label class="checkbox-inline"><input type="checkbox" name="tags[]" value="{{$tageg->id}}">{{$tageg->tags}}</label>
                                                   @endforeach
                                              </div>
                                                  
                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea class="form-control" name="content" rows="6">{{($posts->content)}}</textarea>
                                                  <input class="hidden" type="file" id="upload" name="image">
                                                  <input class="hidden" type="file" id="upload" name="media">
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">EXTRAIT</label>
                                                  <textarea class="form-control" name="excerpt" rows="6">{{$posts->excerpt}}</textarea>
                                                  
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
