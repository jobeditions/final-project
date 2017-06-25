@extends('layouts.master')
@section('content')
<div class="case-item-wrap">
       

          <h3 id="cat-page">Catégorie:{{$categoring->name}}   /<small><b>   Articles:{{$categoring->posts->count()}}</b></small></h3>
          

            </br>
            </br>
                        @foreach($categoring->posts as $categ)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              
                                <div class="case-item">
                                 
                                    <div class="case-item__thumb">
                                    <a href="{{route('single.posting',['slug'=>$categ->slug])}}"><img src="/{{$categ->featured}}" alt="{{$categ->title}}"></a>
                                    </div>
                                   
                                    <a href="{{route('single.posting',['slug'=>$categ->slug])}}"><h6 class="case-item__title">{{$categ->title}}</h6></a>
                                </div>
                            </div>

                        @endforeach

                        {{$posts->links()}}
                            
                            

</div>
</div>
@endsection