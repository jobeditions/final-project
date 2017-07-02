<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="/" class="logo">Blog <span class="lite">Écrivain</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" action={{route('articles.index')}} method="get">
                        {{csrf_field()}}
                            <input class="form-control" placeholder="Chercher des Articles" type="text" id="s" name="query" >
                        
                        <button class="btn btn-primary" type="submit">Q</button>
                    
                        
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{Auth::user()->profile->avatar}}" width=40px height=40px/>
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                        
                            </li>
                            <li>
                                <a href="/home"><i class="icon_key_alt"></i>Vous êtes connecté</a>
                            </li>
                            <li>
                                <a href="/profile"><i class="icon_key_alt"></i>Profile</a>
                            </li>
                             @if(Auth::user()->admin)
                            <li>
                                <a href="/settings"><i class="icon_cogs"></i>Paramétres</a>
                            </li>
                            @endif
                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon_cogs"></i>Déconnexion</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                      
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      