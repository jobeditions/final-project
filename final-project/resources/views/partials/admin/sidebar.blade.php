<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  
                  <li class="active">
                      <a class="" href="/home">
                          <i class="icon_house_alt"></i>
                          <span>Tableau de bord</span>
                      </a>
                  </li>
				       
                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Articles</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                      <li><a class="" href="{{action('IndexController@articleindex')}}">Liste des Articles</a></li>
                        @if(Auth::user()->admin)
                          <li><a href="{{action('PostController@create')}}" class="">Ajouter un article</a></li>                          
                          <li><a class="" href="{{action('PostController@index')}}">Modifier un Article</a></li>
                          <li><a class="" href="{{action('PostController@trash')}}">Corbeille</a></li>
                        @endif
                      </ul>
                  </li>  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tags"></i>
                          <span>Commentaires</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{action('IndexController@commentsindex')}}">Liste des Commentaires</a></li>
                          <li><a class="" href="{{action('CommentsController@index')}}">Ajouter Commentaire</a></li>
                          <li><a class="" href="{{url('/hellcat')}}">Modifier Commentaire</a></li>
                          
                        @if(Auth::user()->admin)
                          <li><a class="" href="{{url('/moderate')}}"> Modérer Commentaire</a></li>
                        @endif 
                      </ul>
                  


                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tag"></i>
                          <span>Catégories</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="{{action('CategoriesController@index')}}">Ajouter une catégorie</a></li>
                          <li><a class="" href="{{action('CategoriesController@trash')}}"><i class="icon_trash"></i>Corbeille</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tags"></i>
                          <span>Étiquettes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="{{action('TagController@index')}}">Ajouter une Étiquette</a></li>
                          <li><a class="" href="{{action('TagController@trash')}}"><i class="icon_trash"></i>Corbeille</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>Utilisateurs</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>

                      <ul class="sub">
                          <li><a class="" href="{{route('user.indexpage')}}"> Liste des Utilisateurs</a></li>
                         @if(Auth::user()->admin)
                          <li><a class="" href="{{url('/utilisateurs/create')}}"> Ajouter un Utilisateur</a></li>
                          <li><a class="" href="{{url('/utilisateurs')}}"> Modifier un Utilisateur</a></li>
                         @endif
                          <li><a class="" href="/profile"> Profile</a></li>
                          
                      </ul>
                  </li>
                   
                    
                     @if(Auth::user()->admin)
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_cogs"></i>
                          <span>Paramètres</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        
                          <li><a class="" href="{{action('SettingsController@index')}}"> Page d'Accueil</a></li>
                          <li><a class="" href="{{action('SettingsController@index1')}}"> À propos </a></li>
                          <li><a class="" href="{{action('SettingsController@index2')}}"> Page de Contact </a></li>
                          
                      </ul>                  
                    
                   </li> 
                  @endif
              

              </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->