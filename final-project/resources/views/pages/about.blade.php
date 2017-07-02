@extends ('layouts.master')
@section('title')
| A Propos
@endsection
@section ('content')
			<div class="col-sm-9 top-right">
		<div class="about-content">
		 <h2>{{$setting->propos_title1}}</h2>
		 <div class="about-section">
		      <div class="who-iam">
				 <h3>{{$setting->propos_title2}}</h3>
				 <div class="man-info">
					 {!!$setting->para1!!}
				 </div>
				 <div class="man-pic">
				 <img src="{!!$setting->image5!!}" alt="" />
				 </div>
				 <div class="clearfix"></div>
			 </div>			 
			 <div class="about-grid">
				 {!!$setting->para2!!}
			 </div>
			 <div class="about-grid2">
				 {!!$setting->para3!!}
				 
			 </div>
			 
		  </div>		 
</div>
	 </div>
		<div class="clearfix"> </div>
	</div>
	</div>

@endsection