
    
      @extends('layouts.app3')
      @section('title')
        Profile
      @endsection

      @section('links')
       @include('partials.admin.links')
      @endsection



      @section('content')
      
      <!--main content start-->
      
 
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/home">Accueil</a></li>
						<li><i class="icon_documents_alt"><a href="/"></i>Pages</a></li>
						<li><i class="fa fa-user-md"></i><a href="/profile">Profile</a></li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{ Auth::user()->profile->firstname.'  '.Auth::user()->profile->lastname}}
                              </h4>               
                              <div class="follow-ava">
                                  <img src=" {{ Auth::user()->profile->avatar}}" alt="Image de {{Auth::User()->name}}">
                              </div>
                              <h5>
                              @if(Auth::user()->admin==2)
                              Administrateur
                              @elseif(Auth::user()->approve==1)
                              Utilisateur
                              @elseif(Auth::user()->approve==0)
                              En Attentant
                              @endif
                              </h5>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>{{ Auth::user()->profile->about }}</p>
                                <p>{{ Auth::user()->email }}</p>
								<p><i class="fa fa-twitter">{{ Auth::user()->profile->twitter }}</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i></span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>{{ Auth::user()->profile->country }}</span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply 
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>
										   
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Daily Activity
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">                                          
                                          

                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                                                      <p>It is a long established fact that a reader will be distracted layout</p>
                                                  </div>
                                              </div>
                                          </div>
                                        
                                          
                                          
                                          

                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                {{ Auth::user()->profile->about}}
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graphique</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Prénom :</span>{{ Auth::user()->profile->firstname}} </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Nom de Famille </span>:{{ Auth::user()->profile->lastname}}</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Anniversaire</span>: {{ Auth::user()->profile->birthday}}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span> Origine </span>: {{ Auth::user()->profile->country}}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span> Métier</span>: {{ Auth::user()->profile->occupation}}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:{{ Auth::user()->email}}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: {{ Auth::user()->profile->mobile}}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Site du Web</span>: {{ Auth::user()->profile->website}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->

                                   @include('partials.user.profileform')
                                 
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>


                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
     
    </section>
 @endsection
 @section('scripts')
    <script src="/js/jquery.js"></script>
    @include('partials.admin.scripts')
 @endsection
