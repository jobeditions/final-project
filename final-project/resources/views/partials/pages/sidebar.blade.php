<body>
<!-- header -->
    <div class="content-main">
        <div class="container">
            <div class="col-md-3 top-left">
                <div class="logo">
                    <a href="/"><img src="{{$setting->image4}}" class="img-responsive" alt="" /></a>
                </div>

                <h4 class="menn">Menu</h4>
                <label></label>
                <div class="head-nav">
                    <span class="menu"> </span>
                        <ul>
                            <li class="{{ url('/') }}"><a href="/">Page d'Accueil</a></li>
                            <li><a href="{{ url('/about') }}">À propos</a></li>
                            <li><a href="{{ url('/blog') }}">Articles</a></li>
                            <!--<li><a href="404.html">Shop</a></li>-->
                            <li><a href="/contact">Contact</a></li>
                        
                            <div class="clearfix"> </div>
                        </ul>
                        <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->     
                </div>
                <div class="clearfix">
                               @if (Route::has('login'))
                               <div class="top-right links">
                                  @if (Auth::check())
                                  <a href="{{ url('/home') }}"><h4>Accueil Utilisateur</h4></a>
                                  @else
                                 <a href="{{ url('/login') }}"><h4>Identifier</h4></a>
                                 <a href="{{ url('/register') }}"><h4>Inscrire</h4></a>
                                  @endif
                               </div>
                             @endif
                </div>

                <div class="project"></div>
                
                <div class="project">
                    <h4>Catégorie</h4>
                    <label></label>
                    <ul>
                    @foreach($category as $categ)
                        <li><a href="{{route('categorie.single',['slugs'=>$categ->slug])}}">{{$categ->name}}</a></li>
                    @endforeach
                        
                    </ul>
                </div>
                <div class="project">
                    <h4>Étiquettes</h4>
                    <label></label>
                    <ul>
                    @foreach($tags as $tegeg)
                        <li><a href="{{route('etiquettes.single',['slugger'=>$tegeg->tags])}}">{{$tegeg->tags}}</a></li>
                    @endforeach
                        
                    </ul>
                </div>
                <div class="project">
                    <h4>Archives</h4>
                    <label></label>
                    <ul>
                    @foreach($archives as $stats)
                        <li><a href="/archives/{{$stats['month']}}/{{$stats['year']}}">{{$stats['month'].''.$stats['year']}} </a></li>
                       
                    @endforeach
                        
                    </ul>
                </div>
                <div class="project">
                    <h4>Social</h4>
                    <label></label>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Behance</a></li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Twitter Feed</h4>
                    <label></label>
                    <p>hey <a href="#">@webfan </a> just been using James George’s website template. i can’t believe he gives them away!</p>
                    <h6>1 day ago</h6>
                    <p>Just purchased <a href="#">@creativebeacon's</a> great book: Beautiful Web Design</p>
                    <h6>1 day ago</h6>
                </div>
            </div>