<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">{{ trans('templates/navbar.homePage') }}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('templates/navbar.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('templates/navbar.signup') }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('templates/navbar.logout') }}</a></li>
                        </ul>
                    </li>
                @endif

                <!-- Languages  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ trans('templates/navbar.Languages') }}<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ getUrlPath('language/ar') }}"><i class="fa fa-btn fa-exchange"></i>{{ trans('templates/navbar.arabic') }}</a></li>
                        <li><a href="{{ getUrlPath('language/en') }}"><i class="fa fa-btn fa-exchange"></i>{{ trans('templates/navbar.english') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
