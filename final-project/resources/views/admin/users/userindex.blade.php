@extends('layouts.app3')
    @section('title')
    Liste des Utilisateurs
    @endsection

    @section('links')
     @include('partials.admin.links')
    @endsection


	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Catégories
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_profile"></i> Utilisateur</th>
                                 <th><i class="icon_mail"></i> E-mail</th>
                                 <th><i class="icon_genius"></i> Statut</th>
                                 <th><i class="icon_genius"></i> Profession</th>
                                 <th></th>
                                 
                              </thead>
                              <tbody>
                                
                                @foreach($users as $using)
                                @if($using->verify)
                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td><img src="{{$using->profile->avatar}}" width="110px" height="90px"/></td>
                                 <td>{{$using->name}}</td>
                                 <td>{{$using->email}}</td>
                                 <td>
                                 @if($using->admin==2)
                                 Admin
                                 
                                 @elseif($using->admin==0 AND $using->approve==1)
                                 Utilisateur
                                 @else
                                 En attendant
                                 @endif
                                 </td>
                                 <td>{{$using->profile->occupation}}</td>
                                 <td></td>
                                 
                              </tr>
                              @endif
                              @endforeach
                                                     
                           </tbody>

                        </table>
                       {{ $users->links() }}
                      </section>
                  </div>
              </div>
        @endsection
        @section('scripts')
          <script src="/js/jquery.js"></script>
          @include('partials.admin.scripts')
        @endsection

