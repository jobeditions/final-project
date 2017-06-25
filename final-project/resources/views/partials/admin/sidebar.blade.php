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
                        @if(Auth::user()->admin)
                          <li><a href="/articles/create" class="">Ajouter un article</a></li>                          
                          <li><a class="" href="/articles">Modifier un Article</a></li>
                          <li><a class="" href="/trash">Corbeille</a></li>
                        @endif
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tag"></i>
                          <span>Catégories</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="/categorie">Ajouter une catégorie</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tags"></i>
                          <span>Étiquettes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="/tags">Ajouter une Étiquette</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>Utilisateurs</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                         @if(Auth::user()->admin)
                          <li><a class="" href="/utilisateurs/create"> Ajouter un Utilisateur</a></li>
                          <li><a class="" href="/utilisateurs"> Modifier un Utilisateur</a></li>
                         @endif
                          <li><a class="" href="/profile"> Profile</a></li>
                          
                      </ul>
                  </li>
                   
                    @if(Auth::user()->admin)
             
                   <li>                
                      <a class="" href="{{route('settings')}}"><i class="icon_cogs"></i><span>Paramètres</span></a>
                   </li>
                              
                   @endif
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->