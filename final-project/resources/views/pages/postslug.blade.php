
@extends('layouts.master')
@section('content')
              <div class="col-md-9 top-right">
				<div class="content">
				  <div class="grids">
					<div class="grid box">
						<div class="grid-header">
						<h1>{{$post->title}}</h1>
						<ul>
							<li><span>Écrit par <b>Marcella Sandrine</b>
							<a href="#"></a> ,le {{$post->created_at->format('F d,Y')}}</span></li></br>
							<li><a href="{{route('categorie.single',['slugs'=>$post->category->slug])}}"><b>Catégorie:</b> {{$post->category->name}}</a></li></br>

                
                        
                           <b>Étiquettes:</b>

                           @foreach($post->tags as $taging)

                           
                            <li><a href="#" class="w-tags-item">{{$taging->tags}}  </a></li>
                           @endforeach 
                           
                       
           
						</ul>
						</div>
						<div class="singlepage">
							<img src="{{$post->featured}}" width="750px" height="400px"/>
							{!! $post->content !!}
							
							<div class="clearfix"> </div>
                            </br>
                            </br>
                            </br>
                            </br>

						</div>
						


		<div id="button-box">
						
			@if($previous)
			   <div id="button-next">
                  <a href="{{route('single.posting',['slug'=>$previous->slug])}}" class="next">&laquo; Précedent </a>
                     <b>{{$previous->title}}</b>
               </div>
            @endif
            
            @if($next)
			   <div id="button-previous">
				  <a href="{{route('single.posting',['slug'=>$next->slug])}}" class="next"> Prochaine &raquo;</a>
					 <b>{{$next->title}}</b>
			   </div>
			@endif
       </div>
      </br>  
      </br>               

 </div>

@endsection