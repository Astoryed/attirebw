@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <h2 class="header center-align">Contact us</h2>

            <!---Left Side-->
            <div class="col s12 m12 l6">

                <div class="card horizontal">
                    <div class="card-content center-align">

                        <form class="col s12">

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>

                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Enter Your Message</label>
                                </div>

                                <button class="btn waves-effect waves-light red accent-1" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <!---Left Side Start-->


            <!---Right Side Map Start-->
            <div class="col s12 m12 l6">


                <div class="card horizontal">
                    <div class="card-content">

                        <!-- Add Google Maps -->

                        <div id="map"></div>

                        <!-- Add Google Maps -->
                    </div>
                </div>
                <!---Right Side Map End-->
            </div>



            <div class="col s12 m12 l12">

                <h1 class="center-align" style="font-family: 'Italianno', cursive;">Official Stockist</h1>

                <div class="card vertical">
                    <div class="card-content">

                        <div class="row">

                            <div  class="col s12 m12 l4 center-align">
                                <div id="contact-box1" class="card-panel red accent-1 white-text">
                                    <i class="fas fa-mobile-alt fa-3x "></i><br>
                                    <b>Phone</b>
                                    <p>+92 311 3856888</p>
                                </div>
                            </div>

                            <div class="col s12 m12 l4">
                                <div class="card-panel red accent-1 white-text">
                                    <b>Karachi</b>
                                    <p>17c lane no: 9 Zamzama next to pizza hut phase V DHA Karachi - BrandsJustPret: Dolmen Mall Clifton Karachi</p>
                                </div>
                            </div>



                            <div class="col s12 m12 l4">
                                <div class="card-panel red accent-1 white-text">
                                    <b>Karachi</b>
                                    <p>Dolmen Mall Clifton Store
                                        F-24 1st floor, Dolmen City Mall, HC-3 Block-4, Scheme-5, Clifton</p>
                                    <p>Phone: +92 (0) 21 35294211</p>
                                </div>
                            </div>


                        </div>


                        <div class="row">

                            <div class="col s12 m12 l4">
                                <div class="card-panel red accent-1 white-text">
                                    <b>Islamabad</b>
                                    <p>Giga Mall Store
                                        Store No 34, Ground Floor, Giga Mall, GT Road, Defence Housing Authority (DHA) Phase II</p>
                                    <p>Phone: +92 333-3963083</p>
                                </div>
                            </div>

                            <div class="col s12 m12 l4">
                                <div class="card-panel red accent-1 white-text">
                                    <b>Abu Dhabi, UAE</b>
                                    <p>The Mall at World Trade Center Store
                                        Store L1-08, World Trade Center Mall, Khalifa Street</p>
                                    <p>Phone: +971 (0)2621 2030</p>
                                </div>
                            </div>



                            <div class="col s12 m12 l4">
                                <div id="contact-box2" class="card-panel red accent-1 white-text">
                                    <b>Houston (USA)</b>
                                    <p>BrandsJustPret: 11929 University BLVD, Sugar land, texas</p>
                                    <p>Phone: +1 832-8864084</p><br>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>




@endsection