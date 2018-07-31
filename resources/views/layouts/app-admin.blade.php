<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/jpg" href="images/logo/favicon.png">

    <!--Import Google Icon Library-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

    <!--My Custom Css-->
    <link href="{{ asset('css/design.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- get jQuery from the google apis -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Attire</title>



</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel red accent-1">
        <div class="container ">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                <img src="images/logo/logo.png" width="150" height="50"  alt=""/>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
<!--                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>-->
<!--                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>


                    @endguest
                </ul>
            </div>
        </div>
    </nav>




    <main class="py-4">
        @yield('content')
    </main>

</div>


</body>
</html>
