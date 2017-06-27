@extends ('layouts.master')
@section('title')
| Archives
@endsection
@section ('content')
<div class="col-md-9 top-right">
  <div class="content">
	<div class="grids">
	
	@foreach($postingg as $poster)
		@include ('partials.pages.archivesblog')
	@endforeach	
	{{$postingg->links()}}	
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
 </div>
        <div class="clearfix"> </div>
		
		<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>

@endsection