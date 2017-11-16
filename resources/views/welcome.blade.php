<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
			<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
          	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
  <nav id="navbar" class="navbar navbar-static-top" style="min-width:340px">

      <div class="container">

        <div class="navbar-header">

            <span><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-bars"></i></button></span>

            <a href="http://www.dbs-business.com" class="navbar-brand">

            	<span class="navbar-toggle" style="margin-top:-35px; margin-left:0px;"><img src="{{ asset('images/logo-dbs2.png') }}" width="230" height="60"></span>

            </a>

        </div>



     <!-- Collect the nav links, forms, and other content for toggling -->

     <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

        <ul class="nav navbar-nav" role="menu">

            <li ><a class="menu-style" id="menu-style" href="http://www.dbs-business.com/about/ " style="padding-top: 5px;">Nosotros<span></span></a></li>

            <li><a class="menu-style" id="menu-style" href="http://www.dbs-business.com/news/ " style="padding-top: 5px;">Blog</a></li>

            <li><a class="menu-style" id="menu-style" href="http://www.dbs-business.com/partners/ " style="padding-top: 5px;">Empresasss</a></li>

			
          	<li><a class="menu-style" id="menu-style" href="{{ url('contactanos') }}" style="padding-top: 5px;">Contáctanos</a></li>

              @if (Route::has('login'))
          
                    @if (Auth::check())
                       <li>
                        <a href="{{ url('/home') }}" class="AuthenticateUsers-style" id="AuthenticateUsers-style" style="padding-top: 5px;">Bienvenido</a>
                        </li>
                    @else
                       <li>
                        <a href="{{ url('/login') }}" class="AuthenticateUsers-style" id="AuthenticateUsers-style" style="padding-top: 5px;">Iniciar sesión</a>
                        </li>
                        <li>
                        <a href="{{ url('/register') }}" class="register-style" id="register-style"style="padding-top: 5px;">Regístrate</a>
                        </li>
                    @endif
  
            	@endif

            
            
            
            

          </ul>



        </div>

       

      </div>

    </nav>           
       
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
