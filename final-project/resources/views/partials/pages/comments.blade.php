<div class="comments-main">
							<div class="col-md-2 cmts-main-left">
								<img src="{{$commenting->user->profile->avatar}}" width="100px" height="100px"/>
							</div>
							<div class="col-md-10 cmts-main-right">
								<h5>Nom: {{$commenting->user->name}}</h5>
								<h5>E-mail:{{$commenting->user->email}}</h5>

								{{$commenting->body}}
								<div class="cmts">
									<div class="cmnts-left">
										<p>Le {{$commenting->created_at->format('F d,Y')}}</p>
									</div>
									<div class="cmnts-right">
										<a href="#">Reply</a>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>