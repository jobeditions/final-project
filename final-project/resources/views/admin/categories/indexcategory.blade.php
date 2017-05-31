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
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class=""></i></th>
                                 <th><i class="icon_cogs"></i> Action</th>
                                 
                              </thead>
                              <tbody>
                               @foreach($cat as $categ)
                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$categ->order}}</td>
                                 <td>{{$categ->name}}</td>
                                 <td>{{$categ->slug}}</td>
                                 <td>{{$categ->created_at->format('F d,Y')}}</td>
                                  
                                 <td></td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <a class="btn btn-primary btn-s" href="{{'/category/'.$categ->id.'/edit'}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/category/'.$categ->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i>  Supprimer</button>
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
