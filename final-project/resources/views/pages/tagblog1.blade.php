<div class="grid box">
			
            @foreach($tags)
			<div class="grid-header">
				<h3><a href="">{{ $tageg->title }}</a></h3>
				<ul>
				<li><span>Écrit par <a href="#"></a> le {{ $tageg->created_at->format('F d,Y')}} </span></li>
				<li><a href="">Catégorie:{{$tageg->category->name}}</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href=""><img src="/{{$tageg->featured}}" width="350px" height="250px"/></a>
				
				{!! $tageg->excerpt !!}

				<div class="clearfix"> </div>
				
			</div>
			
			<div class="comments">
				<ul>
					<li><a href="#"><img src="/images/images/views.png" title="view" /></a></li>
					<li><a href="#"><img src="/images/images/likes.png" title="likes" /></a></li>
					<li><a href="#"><img src="/images/images/link.png" title="link" /></a></li>
					<li><a class="readmore" href="">ReadMore</a></li>
				</ul>
			</div>
			
		</div>