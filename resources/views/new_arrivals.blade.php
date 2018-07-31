@extends('layouts.master')

@section('content')

    <!--Container Product Start-->
    <div id="newArrivals" class="container">
        <!--Container Row Start-->

        <div class="row">

            <div class="collection col l3 m4 s12 white">
                <h5 class="center-align">Products Categories</h5>
                <a href="#" class="collection-item">Luxury Pret</a>
                <a href="#" class="collection-item ">New Arrival</a>
                <a href="#" class="collection-item active">Pret</a>
                <a href="#" class="collection-item">Ready To Wear</a>

            </div>

            @if(Session::has('product_added'))

            <div class="card horizontal cyan white-text">
                <div class="card-content">

                    {{session('product_added')}}

                </div>
            </div>


            @endif


            <div class="col l10 m8 s12 offset-l3" style="float: inherit;">
            @if($products)
                @foreach($products as $product)

                    <!--Coloumn Start-->
                        <div class="col l3 m6 s12">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="{{ route('details', $product->id) }}">
                                    <img class="responsive-img" src="{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                                    </a>
                                </div>

                                <div class="card-content center-align" style="padding: 16px">
                                  <span class="card-title activator grey-text text-darken-4">
                                    {{$product->name}}
                                  </span>
                                    <p>Rs:{{$product->price}}</p>

                                <a href="{{route('more',$product->id)}}" >  <button type="submit" onclick="Materialize.toast('Product Added', 5000)" class="waves-effect waves-light red accent-1 btn">
                                        <i class="material-icons right">shop</i>Buy</button></a>
                                </div>
                            </div>
                        <!--Coloumn End-->
                        </div>
                @endforeach
             @endif
        </div>
    </div>
</div>
@endsection