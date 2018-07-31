@extends('layouts.master')

@section('content')

    <!--Carousel Start-->
    <div class="carousel carousel-slider z-depth-3" data-indicators="true">

        <div class="carousel-item black-text " href="#one!">

            <img src="images/cover/banner1.jpg" class="responsive-img" alt="attireImg"/><!-- slider image -->

        </div>

        <div class="carousel-item white-text" href="#two!">

            <img src="images/cover/banner2.jpg" class="responsive-img"  alt=""/><!-- slider image -->

        </div>

        <div class="carousel-item white-text" href="#three!">

            <img src="images/cover/banner3.jpg" class="responsive-img"  alt="attireImg"/><!-- slider image -->

        </div>

    </div>
    <!--Carousel End-->


    <!--Mid Section Start-->

    <div class="container">
        <div class="row section">
            <!--Animate Start-->

            <div class="col s12 m6 l6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img class="responsive-img" src="images/cover/cat_img2.jpg">
                        <span id="card-text" class="card-title right-align">
                  <p class="black-text" style="font-family: 'Italianno', cursive;">New Arrival</p>
                   <a href="new_arrivals.php" class="waves-effect waves-light red accent-1 btn hoverable"><i class="material-icons right">shop</i>Shop Now</a>
                  </span>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img class="responsive-img" src="images/cover/cat_img1.jpg">
                        <span id="card-text" class="card-title" >
                  <p style="font-family: 'Italianno', cursive;" class="black-text">Hot Sellers</p>
                   <a href="new_arrivals.php" class="waves-effect waves-light red accent-1 btn hoverable"><i class="material-icons right">shop</i>Shop Now</a>
                  </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Mid Section Start-->


    <!--Container Product Start-->
    <div class="container">
        <!--Container Row Start-->
        <div class="row"> <h1 class="center-align" style="font-family: 'Italianno', cursive;">Our Collection</h1>
            <!--Coloumn Start-->

            <div class="col s12 m6 l4 hoverable">
                <div id="blink" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="casual.php"><img src="images/home/capture_03.jpg"></a>
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Pret <br>

                  </span>
                    </div>
                </div>
            </div>
            <!--Coloumn End-->
            <!--Coloumn Start-->
            <div class="col s12 m6 l4 hoverable">
                <div id="blink" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="semiformal.php"><img src="images/home/capture_12.jpg"></a>
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Semi Formals<br>

                  </span>
                    </div>
                </div>
            </div>
            <!--Coloumn End-->
            <!--Coloumn Start-->
            <div id="blink" class="col s12 m6 l4 hoverable">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="formal.php"><img src="images/home/capture_11.jpg"></a>
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Luxury Pret

                  </span>
                    </div>
                </div>
            </div>
            <!--Coloumn End-->

        </div>
        <!--Container Row End-->
    </div>
    <!--Container Product End-->


    <!--Animate Start-->
    <div class="animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.01s" data-offset="100" >

        <!--3 Boxes Start-->
        <div class="container">
            <div class="row">

                <div class="col s12 m4 l4">
                    <div id="symbol" class="card-panel red accent-1">
                        <i class="white-text material-icons">favorite</i><br>
                        <h6 class="white-text">SPECIALIZED IN CUSTOMIZED DESIGNING</h6>
                        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
			I am convenient so I require little markup to use effectively.
          </span>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div id="symbol" class="card-panel red accent-1">
                        <i class="white-text material-icons">update</i><br>
                        <h6 class="white-text">TRENDY OUTFITS</h6>
                        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.

          </span>
                    </div><br>
                </div>

                <div class="col s12 m4 l4">
                    <div id="symbol" class="card-panel red accent-1">
                        <i class="white-text material-icons">thumb_up</i><br>
                        <h6 class="white-text">QUALITY PRODUCT</h6>
                        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.

          </span>
                    </div><br>
                </div>
                <!--3 Boxes End-->

            </div><!--Animate End-->


            <div class="container">
                <!--Magzine Start-->
                <h1 class="center-align" style="font-family: 'Italianno', cursive;"">Magzines Covers</h1>

                <!--Row Start-->
                <div class="row">
                    <!--Coloumn Start-->


                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="images/magzine/01.jpg"></div>
                        <div class="item"><img src="images/magzine/02.jpg"></div>
                        <div class="item"><img src="images/magzine/03.jpg"></div>
                        <div class="item"><img src="images/magzine/04.jpg"></div>
                        <div class="item"><img src="images/magzine/05.jpg"></div>
                        <div class="item"><img src="images/magzine/06.jpg"></div>
                        <div class="item"><img src="images/magzine/07.jpg"></div>
                        <div class="item"><img src="images/magzine/08.jpg"></div>
                    </div><h5></h5>

                    <!--Row Start-->
                </div>
                <!--Magzine End-->
            </div>



            <!--Row Start-->
            <div class="row center-align" >


                <!--Client Dairy Start-->
                <h1 style="font-family: 'Italianno', cursive;">Client Diaries</h1>


                <a href="{{ route('client') }}" style="font-size:20px;" class="waves-effect waves-light btn-large red accent-1"> View Client Diaries</a>
                <!--Coloumn Start-->
                <!-- <div class="col l3 m6 s12 hoverable ">
                   <img class="materialboxed responsive-img" src="images/client/client01.jpg">
                 </div>
                 <div class="col l3 m6 s12 hoverable ">
                   <img class="materialboxed responsive-img" src="images/client/client02.jpg">
                 </div>
                 <div class="col l3 m6 s12 hoverable ">
                   <img class="materialboxed responsive-img" src="images/client/client03.jpg">
                 </div>
                 <div class="col l3 m6 s12 hoverable ">
                   <img class="materialboxed responsive-img" src="images/client/client04.jpg">
                 </div> -->
                <!--Row Start-->
            </div>
            <!--Client Dairy End-->

        </div>
    </div>


@endsection