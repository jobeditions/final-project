@extends ('layouts.master')
@section('title')
Blog écrivain-Articles
@endsection
@section ('content')
<div class="col-md-9 top-right">
  <div class="content">
	<div class="grids">
	
	@foreach($posts as $posting)
		@include ('partials.pages.postsblog')
	@endforeach	
		
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
 </div>
        <div class="clearfix"> </div>
		{{$posts->links()}}
		<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
@endsection