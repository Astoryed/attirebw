@extends('layouts.master')

@section('content')

    <!--Container Product Start-->
    <div class="container">
        <!--Container Row Start-->

        <div class="row">

            <div class="collection col l3 m4 s12 white">
                <h5 class="center-align">Products Categories</h5>
                <a href="#" class="collection-item">Luxury Pret</a>
                <a href="#" class="collection-item ">New Arrival</a>
                <a href="#" class="collection-item active">Pret</a>
                <a href="#" class="collection-item">Ready To Wear</a>

            </div>


            <!--Coloumn Start-->
            <div class="col l3 m4 s12">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="responsive-img" src="images/home/capture_18.jpg">
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Card Title<i class="material-icons right">more_vert</i>
                  </span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>

            </div>
            <!--Coloumn End-->

            <!--Coloumn Start-->
            <div class="col l3 m4 s12">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="responsive-img" src="images/home/capture_17.jpg">
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Card Title<i class="material-icons right">more_vert</i>
                  </span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>

            </div>

            <!--Coloumn Start-->
            <div class="col l3 m4 s12">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="responsive-img" src="images/home/capture_17.jpg">
                    </div>
                    <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                  Card Title<i class="material-icons right">more_vert</i>
                  </span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>

            </div>
            <!--Coloumn End-->

        </div>
    </div>

@endsection