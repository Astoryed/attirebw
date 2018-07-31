<!DOCTYPE html>
<html>
<head>

    <link rel="icon" type="image/jpg" href="images/logo/favicon.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Bubbler+One|Glass+Antiqua" rel="stylesheet">

    <!--Import Font Awesome Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet"  media="screen,projection">

    <!--My Custom Css-->
    <link href="{{ asset('css/design.css') }}" rel="stylesheet">

    <!-- xZoom CSS STYLE-->
    <link rel="stylesheet" href="{{ asset('css/xzoom.css') }}" media="all" />

    <!--My Table Css-->
    <link href="{{ asset('css/tableDesign.css') }}" rel="stylesheet">

    <!-- get jQuery from the google apis -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--Import jQuery before materialize.js-->
    <script type="javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- XZOOM JQUERY PLUGIN  -->
    <script src="{{ asset('js/xzoom.min.js') }}"></script>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Attire</title>

</head>
<body>

<div id="app">

    <nav class="navbar red accent-1">
        <div class="container ">
            <div class="row">

                    <ul class="right">

                        <li><a class='dropdown-button' href='#' data-activates='dropdown-logout'>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </li>
                    </ul>

                    <ul id='dropdown-logout' class='dropdown-content'>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>

                {{--Side Bar --}}

                <ul id="slide-out" class="side-nav fixed">
                    <li style="margin: 14px;">
                        <a class="navbar-brand" href="{{ url('/admin') }}">
                            <img src="images/logo/logo.png" width="150" height="50"  alt=""/>
                            <img src="../images/logo/logo.png" width="150" height="50"  alt=""/>
                        </a>
                    </li><br>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header" style="margin-left: 12px;">Admin<i class="material-icons" style="float: right;">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{route('display')}}">Admin Index</a></li>
                                        <li><a href="{{route('create')}}">Create Admin</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header" style="margin-left: 12px;">Products<i class="material-icons" style="float: right;">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{route('products.index')}}">Products Index</a></li>
                                        <li><a href="{{route('products.create')}}">Create Product</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li><a href="{{route('customer.index')}}">Customer Index</a></li>

                    <li><a href="#">Orders</a></li>

                </ul>

                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>


                {{--Side Bar End--}}
            </div>

        </div>

    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <script>
        <!--Navbar Leftside-->
        $(document).ready(function(){
            $('.button-collapse').sideNav({
                menuWidth: 250, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens,
            });
        });

    </script>

</div>





</body>
</html>