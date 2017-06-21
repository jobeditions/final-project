<div class="welcome">
					
					<div class="welcome-top">
						<div class="col-md-6 welcome-left">
							<div class="view view-tenth">
							  <a href="{{route('single.posting',['slug'=>$secondpost->slug])}}">
							   <div class="inner_content clearfix">
								<div class="product_image">
									<img src="{{$secondpost->featured}}" class="img-responsive of-my" alt=""/>
									<div class="mask" >
										<h4>{{$secondpost->title}}</h4>
										<p>{!!$secondpost->excerpt!!}</p>
										<h5>Continue reading...</h5>
									</div>
									</div>
								 </div>
								</a> 
						   </div>
						</div>
						<div class="col-md-6 welcome-right">
							<div class="view view-tenth">
							  <a href="{{route('single.posting',['slug'=>$thirdpost->slug])}}">
							   <div class="inner_content clearfix">
								<div class="product_image">
									<img src="{{$thirdpost->featured}}" class="img-responsive of-my" alt=""/>
									<div class="mask" >
										<h4>{{$thirdpost->title}}</h4>
										<p>{!!$thirdpost->excerpt!!}</p>
										<a href="{{route('single.posting',['slug'=>$thirdpost->slug])}}"><h5>Continue reading...</h5></a>
									</div>
									</div>
								 </div>
								</a> 
						   </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				<!-- welcome-bottom -->
					<div class="welcome-bottom">
						<div class="col-md-6 welcome-left1">
							<a href="{{route('single.posting',['slug'=>$firstpost->slug])}}"><img src="{{$firstpost->featured}}" class="img-responsive" alt="" /></a>
							<h3><a href="{{route('single.posting',['slug'=>$firstpost->slug])}}">{{$firstpost->title}}</a></h3>
							<h6>{{ $firstpost->created_at->diffForHumans()}}</h6>
							<p>{!!$firstpost->excerpt!!}</p>
							<a href="{{route('single.posting',['slug'=>$firstpost->slug])}}">Lirer En Suite...</a>
						</div>
						<div class="col-md-6 welcome-right1">
							<div class="free">
								<div class="free-left">
									<a href="singlepage.html"><img src="/images/images/img7.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="free-right">
									<h5><a href="singlepage.html">Free Your Mind And Your Design</a></h5>
									<p>Proin gravida nibh vel velit auctor aliquet. </p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="free">
								<div class="free-left">
									<a href="singlepage.html"><img src="/images/images/img8.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="free-right">
									<h5><a href="singlepage.html">Web Design Trends for 2014</a></h5>
									<p>Proin gravida nibh vel velit auctor aliquet. </p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="free">
								<div class="free-left">
									<a href="singlepage.html"><img src="/images/images/img9.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="free-right">
									<h5><a href="singlepage.html">Web Design Trends for 2014</a></h5>
									<p>Proin gravida nibh vel velit auctor aliquet. </p>
								</div>
								<div class="clearfix"> </div>
							</div>
							
							<div class="free">
								<div class="free-left">
									<a href="singlepage.html"><img src="/images/images/img10.jpg" class="img-responsive" alt="" /></a>
								</div>
								<div class="free-right">
									<h5><a href="singlepage.html">Why You Should Join My Site</a></h5>
									<p>Proin gravida nibh vel velit auctor aliquet. </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				<!-- welcome-bottom -->
				</div>
			<!-- welcome 
				<div class="should">
					<h4>You should follow James George on Twitter, Facebook, Google+ and LinkedIn</h4>
					<a href="#" class="more">Get Started</a>
				</div>-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>