@extends('layouts.app3')
@section('title')
Modifier/Tags
@endsection

	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Étiquettes
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Tags</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_calendar"></i> Modifié le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($tags as $tageg)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$tageg->order}}</td>
                                 <td>{{$tageg->tags}}</td>
                                 <td>{{$tageg->created_at->format('F d,Y')}}</td>
                                 <td>{{$tageg->created_at->format('F d,Y')}}</td>
                                  
                                 <td></td>
                                 <td>
                                 @if($tageg->id==1)
                                 <div class="btn-group"></div>
                                 @else
                                  <div class="btn-group">
                                  <div class="btn-group">
                                      <a class="btn btn-primary btn-s" href="{{'/tags/'.$tageg->id.'/edit'}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{'/tags/'.$tageg->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i>  Supprimer</button>
                                      </form>
                                  </div>
                                  @endif
                                  </td>
                              </tr>
                             
                              @endforeach
                                                     
                           </tbody>
                        </table>
                         {{$tags->links()}}
                      </section>
                  </div>
              </div>
              @endsection
