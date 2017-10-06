@extends('layouts.app3')
@section('title')
Accueil-Utilisateur
@endsection


@section('links')
  @include('partials.admin.links')
@endsection
@section('content')
 <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Tableau de Bord</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/">Acceuil</a></li>
						<li><i class="fa fa-laptop"></i>Tableau de Bord</li>						  	
					</ol>
				</div>
			</div>
		
              
            <div class="row">
				
				
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			       <div class="info-box ">
			          <div class="image-dash">

                        <img src="/images/dashboard/bg-1.jpg" alt="" />
                        <h2>{{$user->count()}} Utilisateurs</h2>
                        <i class="fa fa-user"></i>
                         <h5>Vous avez {{$user->count()}} utilisateurs</br>Veuillez clickez sur le lien pour accéder</br> la liste des utilisateurs</h5>
                         <a href = "{{route('user.indexpage')}}"> <button class="btn btn-primary " >Liste des Utilisateurs</button></a>
                         

                        </div>				
					</div><!--/.info-box-->			
			</div><!--/.col-->	
				
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				 <div class="info-box ">
				     <div class="image-dash">
				        <img src="/images/dashboard/bg-3.png" alt="" />
						<i class="fa fa-file-text "></i>
						<h2>{{$posts->count()}} Articles</h2>
                        
                        <h5>Vous avez {{$posts->count()}} Articles</br>Veuillez clickez sur le lien pour accéder</br> la liste des Articles</h5>
                        <a href = "{{route('articles.indexpage')}}"> <button class="btn btn-primary pull-right" type="submit" >Liste des Articles</button></a>
		
					 </div>			
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="info-box ">
					  <div class="image-dash">
					 
				        <img src="/images/dashboard/bg-2.png" alt="" />
						<i class="fa fa-comments "></i>
						<h2>{{$comments->count()}} Commentaires</h2>
                        
                         <h5>Vous avez {{$comments->count()}} commentaires</br>Veuillez clickez sur le lien pour accéder</br> la liste des commentaires</h5>
                          <a href="{{route('comments.indexpage')}}"><button class="btn btn-primary pull-right" type="submit" >Liste des Commentaires</button></a>
					  </div>			
					 		
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		

@endsection
@section('scripts')
   <script src="/js/jquery.js"></script>
   @include('partials.admin.scripts')
@endsection
