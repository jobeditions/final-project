<body>
<!-- header -->
    <div class="content-main">
        <div class="container">
            <div class="col-md-3 top-left">
                <div class="logo">
                    <a href="/"><img src="/images/images/logo.png" class="img-responsive" alt="" /></a>
                </div>
                <h4 class="menn">Menu</h4>
                <label></label>
                <div class="head-nav">
                    <span class="menu"> </span>
                        <ul>
                            <li class="active"><a href="/">Accueil</a></li>
                            <li><a href="/about">À propos</a></li>
                            <li><a href="/archive">Des Archives</a></li>
                            <li><a href="/posts">Articles</a></li>
                            <!--<li><a href="404.html">Shop</a></li>-->
                            <li><a href="/contact">Contact</a></li>
                           
                            <li> @if (Route::has('login'))
                       <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Identifier</a>
                        <a href="{{ url('/register') }}">Inscrire</a>
                    @endif
                </div>
            @endif
</li>
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
                <div class="clearfix"> </div>
                
                <div class="project">
                    <h4>Catégorie</h4>
                    <label></label>
                    <ul>
                    @foreach($category as $categ)
                        <li><a href="#">{{$categ->name}}</a></li>
                    @endforeach
                        
                    </ul>
                </div>
                <div class="project">
                    <h4>Archives</h4>
                    <label></label>
                    <ul>
                        <li><a href="#"> January 2017</a></li>
                        <li><a href="#"> February 2017</a></li>
                        <li><a href="#"> March 2017 </a></li>
                        <li><a href="#"> April 2017</a></li>
                        <li><a href="#"> May 2017</a></li>
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