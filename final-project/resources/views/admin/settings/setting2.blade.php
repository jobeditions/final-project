@extends('layouts.app3')
@section('title')
  Paramétres
@endsection

@section('links')
  @include('partials.admin.links')
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
                                     Paramétres|Page-Contact
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                         
                                              <form action="{{action('SettingsController@updating')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              

                                               <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="propos_title1"><b>Titre_du_Page</b></label>
                                                 <input class="form-control" type="text" id="propos_title1" name="propos_title1" value="{{$setting->propos_title1}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="propos_title2"><b> Qui_Suis_Je??</b></label>
                                                 <input class="form-control" type="text" id="propos_title2" name="propos_title2" value="{{$setting->propos_title2}}">
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image5"><b> Image:Principal</b></label>
                                                 <input class="form-control" type="file" id="image5" name="image5">
                                              </div>

                                              

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1"><b>La_Description_premiér_para</b></label>
                                                  <textarea class="form-control" name="para1" rows="6">{{$setting->para1}}</textarea>
                                              </div>

                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1"><b>La_Description_deuxiémé_para</b></label>
                                                  <textarea class="form-control" name="para2" rows="6">{{$setting->para2}}</textarea>
                                              </div>

                                               <div class="col-sm-10">
                                                  <label class="control-label col-sm-1"><b>La_Description_troisiémé_para</b></label>
                                                  <textarea class="form-control" name="para3" rows="6">{{$setting->para3}}</textarea>
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