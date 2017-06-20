
@extends('layouts.master')
@section('content')
              <div class="col-md-9 top-right">
				<div class="content">
				  <div class="grids">
					<div class="grid box">
						<div class="grid-header">
						<h1>{{$post->title}}</h1>
						<ul>
							<li><span>Écrit par <a href="#"></a>{{$post->created_at->format('F d,Y')}}</span></li>
							<li><a href="{{route('categorie.single',['slug'=>$post->category->slug])}}">Catégorie: {{$post->category->name}}</a></li>
						</ul>
						</div>
						<div class="singlepage">
							<img src="/{{$post->featured}}" width="750px" height="400px"/>
							{!! $post->content !!}
							
							<div class="clearfix"> </div>
						</div>
						<div class="comments">
							<ul>
								<li><a href="#"><img src="/images/images/views.png" title="view" /></a></li>
								<li><a href="#"><img src="/images/images/likes.png" title="likes" /></a></li>
								<li><a href="#"><img src="/images/images/link.png" title="link" /></a></li>
								<li></li>
							</ul>
						</div>
						</br>
						</br>
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
                       

					</div>

@endsection