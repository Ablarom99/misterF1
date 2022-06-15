<header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="site-title"><span style="font-family: ethnocentric;">Mister</span><span
                        style="font-family: protos; color:#e10600;">F1</span></a>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="agency-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i
                                class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="ui-elements.html">UI Elements</a></li>
                    <li>@guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">{{ Auth::user()->name }}<i class="fa fa-caret-down hidden-xs"
                                    aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li><a href="{{ route('crearescuderia') }}">{{ __('Crear Escudería') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
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
