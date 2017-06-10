@extends ('layouts.master')
@section('title')
Blog écrivain-archives
@endsection
@section ('content')
			<div class="col-md-9 top-right">
				<div class="achives-content">
					<h2>Achives</h2>
					@include ('partials.postsarchive')
					@include ('partials.postsarchives1')
					@include ('partials.postsarchive')
					@include ('partials.postsarchives1')
					
					
					
					
					
				</div>
	 </div>
		<div class="clearfix"> </div>
	</div>
	</div>
@endsection