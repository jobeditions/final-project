<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR">
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="language" content="fr-FR" />
    <meta name="author" content="Ashok DEB">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title')</title>

    @yield('links')
 
  </head>

  <body>
  
  <!-- container section start -->
  <section id="container" class="">
     
      
      
      <!--header -->
      @include('partials.admin.header')

      <!--sidebar start-->
      
      @include('partials.admin.sidebar')
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">       
		  
		 @yield('content')
              
       
          
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

   <!-- javascripts -->
    @yield('scripts')

    
  </body>
</html>
