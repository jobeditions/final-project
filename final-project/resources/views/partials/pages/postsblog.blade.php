
		<div class="grid box">
			<div class="grid-header">
				<h3><a href="articles/{{ $posting->id }}">{{ $posting->title }}</a></h3>
				<ul>
				<li><span>Post By <a href="#"></a> on {{ $posting->created_at->format('F d,Y')}} </span></li>
				<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="articles/{{ $posting->id }}"><img src="{{$posting->featured}}" width="400px" height="250px"/></a>
				
				{!! $posting->excerpt !!}

				<div class="clearfix"> </div>
			</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="/images/images/views.png" title="view" /></a></li>
				<li><a href="#"><img src="/images/images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="/images/images/link.png" title="link" /></a></li>
				<li><a class="readmore" href="articles/{{ $posting->id }}">ReadMore</a></li>
			</ul>
			</div>
		</div>