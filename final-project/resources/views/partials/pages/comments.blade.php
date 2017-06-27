<div class="comments-main">
							<div class="col-md-2 cmts-main-left">
								<img src="/images/images/avatar.png" alt="">
							</div>
							<div class="col-md-10 cmts-main-right">
								<h5>Nom: {{$commenting->author}}</h5>
								<h5>E-mail:{{$commenting->email}}</h5>

								@if($commenting->website)
								<h5>Site du Web:{{$commenting->website}}</h5>
								@endif

								{{$commenting->body}}
								<div class="cmts">
									<div class="cmnts-left">
										<p>Le {{$commenting->created_at}}</p>
									</div>
									<div class="cmnts-right">
										<a href="#">Reply</a>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>