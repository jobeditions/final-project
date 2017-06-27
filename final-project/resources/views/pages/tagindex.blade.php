@extends('layouts.master')
@section('title')
| Étiquettes
@endsection
@section('content')
<div class="case-item-wrap">
       

          <h3 id="cat-page">Étiquettes:{{$tagger->tags}}   /<small><b>   Articles:{{$tagger->posting->count()}}</b></small></h3>
          

            </br>
            </br>
                        @foreach($tagger->posting as $taging)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              
                                <div class="case-item">
                                 
                                    <div class="case-item__thumb">
                                    <a href="{{route('single.posting',['slug'=>$taging->slug])}}"><img src="{{$taging->featured}}" alt="{{$taging->title}}"></a>
                                    </div>
                                   
                                    <a href="{{route('single.posting',['slug'=>$taging->slug])}}"><h6 class="case-item__title">{{$taging->title}}</h6></a>
                                </div>
                            </div>

                        @endforeach
                            
                   {{$posts->links()}}         

</div>
</div>
@endsection