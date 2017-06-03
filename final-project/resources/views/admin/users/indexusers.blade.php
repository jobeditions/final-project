@extends('layouts.app3')

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
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($users as $using)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td><img src="{{$using->profile->avatar}}" width="110px" height="90px"/></td>
                                 <td>{{$using->name}}</td>
                                 <td>{{$using->email}}</td>
                                 <td>{{$using->admin}}</td>
                                 <td>{{$using->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <a class="btn btn-primary btn-s" href="{{'/users/'.$using->id.'/edit'}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/users/'.$using->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_trash"></i>  Corbeille</button>
                                      </form>
                                  <!--</div>-->
                                  </td>
                              </tr>
                             
                              @endforeach
                                                     
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              @endsection
