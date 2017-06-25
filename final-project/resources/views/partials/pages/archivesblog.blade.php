<div class="grid box">
			<div class="grid-header">
				<h3><a href="{{route('single.posting',['slug'=>$poster->slug])}}">{{ $poster->title }}</a></h3>
				<ul>
				<li><span>Écrit par <a href="#"></a> le {{ $poster->created_at->format('F d,Y')}} </span></li>
				<li><a href="{{route('categorie.single',['slugs'=>$poster->category->slug])}}">Catégorie:{{$poster->category->name}}</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="{{route('single.posting',['slug'=>$poster->slug])}}"><img src="/{{$poster->featured}}" width="350px" height="250px"/></a>
				
				{!! $poster->excerpt !!}

				<div class="clearfix"> </div>
				
			</div>
			
			<div class="comments">
				<ul>
					<li><a href="#"><img src="/images/images/views.png" title="view" /></a></li>
					<li><a href="#"><img src="/images/images/likes.png" title="likes" /></a></li>
					<li><a href="#"><img src="/images/images/link.png" title="link" /></a></li>
					<li><a class="readmore" href="{{route('single.posting',['slug'=>$poster->slug])}}">ReadMore</a></li>
				</ul>
			</div>
			
		</div>