<header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="{{ route('home') }}" class="site-title"><span
                        style="font-family: ethnocentric;">Mister</span><span
                        style="font-family: protos; color:#e10600;">F1</span></a>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="agency-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Páginas<i
                                class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li><a href="{{ route('calendario') }}">Calendario</a></li>
                            <li><a href="{{route('pilotos')}}">Pilotos</a></li>
                            <li><a href="{{route('circuitos')}}">Circuitos</a></li>
                            <li><a href="{{route('escuderias')}}">Escuderías</a></li>
                        </ul>
                    </li>
                    @guest
                    @else
                    <li><a href="{{route('clasificacion')}}">Clasificación</a></li>
                    <li><a href="{{route('noticias')}}">Noticias</a></li>
                    @if (\Auth::user()->rol == 'admin' || \Auth::user()->rol == 'editor' )
                    <li><a href="{{route('subirnoticia')}}">Subir Noticia</a></li>
                    @endif
                    @if (\Auth::user()->rol == 'admin')
                    <li><a href="{{route('paneluser')}}">Panel de Usuarios</a></li>
                    @endif
                    @endguest
                    <li>@guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">{{ Auth::user()->nickname }}<i class="fa fa-caret-down hidden-xs"
                                    aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li><a href="{{ route('crearescuderia.index') }}">{{ __('Mi Escudería') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav><!-- /.site-navigation -->
</header><!-- /#mastheaed -->
