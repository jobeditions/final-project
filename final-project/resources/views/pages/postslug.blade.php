
@extends('layouts.master')
@section('content')
              <div class="col-md-9 top-right">
				<div class="content">
				  <div class="grids">
					<div class="grid box">
						<div class="grid-header">
						<h1>{{$post->title}}</h1>
						<ul>
							<li><span>Post By <a href="#">Admin</a> {{$post->created_at->format('F d,Y')}}</span></li>
							<li><a href="#">Catégorie: {{$post->category->name}}</a></li>
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
					</div>

@endsection