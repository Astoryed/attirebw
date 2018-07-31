<!DOCTYPE html>
<html>
<head>
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Bubbler+One|Glass+Antiqua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">

    <!--Import Font Awsome Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import Google Icon Libarary-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="images/logo/favicon.png">

    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--My Custom Css-->
    <link href="{{ asset('css/design.css') }}" rel="stylesheet">
    <!-- xZoom CSS STYLE-->
    <link rel="stylesheet" href="{{ asset('css/xzoom.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" media="all" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" media="all" />

    <!-- get jQuery from the google apis -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <!-- XZOOM JQUERY PLUGIN  -->
    <script src="{{ asset('js/xzoom.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>

<body>

<!---Scroll to Top Button-->

<div id="myBtn" class="fixed-action-btn horizontal">
    <a onclick="topFunction()" class="btn-floating btn-large red accent-1">
        <i class="material-icons">keyboard_arrow_up</i>
    </a>

</div>



<div class="flex-center position-ref full-height">


</div>



<!--Navigation Bar Start-->
<header>

    <div class="navbar-fixed" style="background-color:#333;">

        <div id="logBtn">
            <div class="right hide-on-med-and-down">
            <a href="login">
                @if (Route::has('login'))
                    <div>
                        @if (Auth::check())
                            <a href="{{ url('/home') }}" class='dropdown-button red accent-1 btn'><i class="material-icons left">cloud</i>Home</a>
                        @else
                            <a href="{{ url('/login') }}" class='dropdown-button red accent-1 btn'><i class="material-icons left">lock</i>Login</a>
                            {{--<a href="{{ url('/register') }}" class="waves-effect waves-light btn"><i class="material-icons left">person add</i>Register</a>--}}
                        @endif
                    </div>
                @endif
            </a>
            </div>

            <div id="converter">
            <a href="#" class='dropdown-button red accent-1 btn' data-activates='dropdown3'>USD $</a>
            </div>
        </div>


        <nav>
            <div class="container">
                <div class="nav-wrapper">

                    <a href="index.php" class="brand-logo">
                        <img src="images/logo/logo.png"  alt="Attire"/>
                    </a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('newArrivals') }}">New Arrival</a></li>
                        <li><a href="new_arrivals.php" class='dropdown-button' data-activates='dropdown1'>Accessories</a></li>
                        <li><a href="{{ route('contact') }}">News & Events</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('stockist') }}">Become Our Stockist</a></li>
                        <li><a href="{{route('cart.index')}}"><i class="material-icons" style="display: inline-flex;">shop</i>

                                @if(Session::has('cart'))
                                <span class="badge red white-text">
                                    {{Session::has('cart') ? Session::get('cart')->totalQty : ''}}
                                </span>
                                @endif

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="side-nav" id="mobile-demo"><br>
        <a href="#" class="brand-logo"><img src="images/logo/logo.png" width="100" height="50"  alt=""/></a>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('newArrivals') }}">New Arrival</a></li>
        <li><a href="{{ route('ready') }}" >Ready to Wear</a></li>
        <li><a href="{{ route('contact') }}">News & Events</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('stockist') }}">Become Our Stockist</a></li>
        <li>
            @if (Route::has('login'))

                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    {{--<a href="{{ url('/register') }}" class="waves-effect waves-light btn"><i class="material-icons left">person add</i>Register</a>--}}
                @endif

            @endif

        </li>
        <li><a href="#"><i class="material-icons">shop</i></a></li>
    </ul>


    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#">Jewellery</a></li>
        <li><a href="#">Bottoms</a></li>
        <li><a href="#">Scarfs</a></li>
        <li>
            <a href="#" class='dropdown-button2' data-activates='dropdown2' data-hover="hover" data-alignment="left">Shoes</a>
        </li>
    </ul>


    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="#">Flip-flops</a></li>
        <li><a href="#">Sandals</a></li>
        <li><a href="#">Sneakers</a></li>
    </ul>


    <ul id='dropdown3' class='dropdown-content'>
        <li><a href="#">PKR, Rs</a></li>
        <li><a href="#">EURO, €</a></li>
        <li><a href="#">CA, $</a></li>
    </ul>


</header><br><br><br><br>

<!--Navigation Bar End-->

@yield('content')


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <h5 class="white-text">Customer Care</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{{route('contact')}}">Contact Us</a></li>
                    <li><a class="grey-text text-lighten-3" href="{{route('returnPolicy')}}">Return & Exchange Policy</a></li>

                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Information</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{{route('about')}}">About Us</a></li>
                    <li><a class="grey-text text-lighten-3" href="{{route('privacy')}}">Privacy Policy</a></li>

                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul id="social">

                    <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/attirebw">
                            <i class="fab fa-facebook-square fa-3x"></i></a></li>

                    <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/attirebw/">
                            <i class="fab fa-instagram fa-3x"></i></a></li>

                    <li><a class="grey-text text-lighten-3" href="#">
                            <i class="fab fa-snapchat-square fa-3x"></i></a></li>

                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">We Accept</h5>
                <ul id="social">
                    <li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-cc-mastercard fa-2x"></i></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-cc-visa fa-2x"></i></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-cc-paypal fa-2x"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 AttireBW  Trademarks and brands are the property of their respective owners.
        </div>
    </div>
</footer>


<script>
    <!--Navbar Leftside-->
    $(document).ready(function(){
        $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
        });
    });

    <!--Carousel-->
    $('.carousel.carousel-slider').carousel({fullWidth: true},setTimeout(autoplay, 4500));
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 3500);
    }

    <!--Form Select Options-->
    $(document).ready(function() {
        $('select').material_select();
    });

</script>

<script>
    // Scroll to Top Button
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<script>
    // For Magnifing
    $(document).ready(function(){
        $(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});
    });
</script>


<script>

    // For Dropdown Button
    $(document).ready(function(){
        $('.dropdown-button').dropdown('close');
    });


    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );

    // For Dropdown Sub Menu
    $('.dropdown-button2').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

</script>

<script>
    // Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

</script>




<!--Google Map Api-->
<script>
    function initMap() {
        var uluru = {lat: 24.817980, lng: 67.039696 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUXFoPrYb1rTQ-gGmXvrNEBbKrRAAo0js&callback=initMap">
</script>

</body>
</html>

