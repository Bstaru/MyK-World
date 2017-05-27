<!DOCTYPE html>
<html  lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('title')</title>
        <link rel="icon" href="{{asset('assets/images/icons/planet.ico')}}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Librerias-->
        <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>
        <script type="text/javascript" src="{{asset('js/jq.js')}}" ></script>
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <!-- My stylesheet-->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    </head>

    <body>
    <!--    @section('sidebar')
            This is the master sidebar.
        @show
        -->
        @section('PageLayout')
        <div class="container-fluid">
             <div class="row">
                <nav class="navbar nb-color" role="navigation">
                    <div class = "container">
                          <!-- El logotipo y el icono que despliega el menú se agrupan
                               para mostrarlos mejor en los dispositivos móviles -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nb-btn-mini" data-toggle="collapse"
                                    data-target=".navbar-ex1-collapse">
                                <span class="sr-only">More</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logotipo" href="/home"><img src="{{asset('assets/images/icons/planet.png')}}" class="logoNav"></a>
                        </div>
                     
                      <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                           otro elemento que se pueda ocultar al minimizar la barra -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse navSearch">

                            <form class="nav navbar-form navbar-left" role="search" method="post" action="{{ route('search') }}">
                                {{ csrf_field() }}
                                <div class="form-group input-group">
                                    <input name="search" id="search" type="text" class="form-control nb-search" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-danger nb-search-btnok search-btn">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>

                                </div>  
                            </form>
                     
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="{{ route('list') }}" class = "nb-link"><span class = "glyphicon glyphicon-list-alt"></span> My list</a>
                                </li>
                                <li>
                               
                                    <a href="{{ route('profile',Auth::user()->id) }}" class = "nb-link"><span class = "glyphicon glyphicon-user"></span> {{ Auth::user()->username }} </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle nb-link" data-toggle="dropdown"><span class = "glyphicon glyphicon-cog"></span> Configuration</a>
                                    <ul class="dropdown-menu menusito">
                                        <li>
                                            <a href="/config"><span class = "glyphicon glyphicon-edit"></span> Edit profile</a>
                                        </li>
                                        <li>
                                            <a href="/config-account"><span class = "glyphicon glyphicon-cog"></span> Account settings</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class = "glyphicon glyphicon-log-out"></span> Log out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                        
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            @yield('content')

            

            <div class ="row pie">                     
                <div class = "container">
                    <div class = "col-lg-2 col-md-2 col-sm-12 col-sx-12 category">
                        <a href="#">CATEGORIES</a>
                        <hr>
                        <ul>
                            <li><a href="#">1 catego</a></li>
                            <li><a href="#">2 catego</a></li>
                            <li><a href="#">3 catego</a></li>
                            <li><a href="#">4 catego</a></li>
                        </ul>
                        <hr class= "lineaverse">
                    </div>
                    <div class = "col-lg-2 col-md-2 col-sm-12 col-sx-12 groups">
                        <a href="#">GROUPS</a>
                        <hr>
                        <ul>
                            <li><a href="#">Boys</a></li>
                            <li><a href="#">Girls</a></li>
                            <li><a href="#">Mixed</a></li>
                        </ul>
                        <hr class= "lineaverse">
                    </div>
                    <div class = "col-lg-2 col-md-2 col-sm-12 col-sx-12 solos">
                        <a href="#">SOLOS</a>
                        <hr>
                        <ul>
                            <li><a href="#">Boys</a></li>
                            <li><a href="#">Girls</a></li>
                        </ul>
                        <hr class= "lineaverse">
                    </div>
                    <div class = "col-lg-6 col-md-6 col-sm-12 col-sx-12 contact">
                        <a href="#">CONTACT US</a>
                        <br>
                        <a href=""><img src="{{asset('assets/images/icons/fbh.png')}}" class="img1"></a>
                        <a href=""><img src="{{asset('assets/images/icons/twit.png')}}" class="img2"></a>
                        <a href=""><img src="{{asset('assets/images/icons/u2h.png')}}" class="img3"></a>

                        <P>COPYRIGHT 2017</P>
                    </div>
                </div>    
            </div>     
        </div>
        @show


    <script src="{{ asset('js/app.js') }}"></script>

    </body>


</html>