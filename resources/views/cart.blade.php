@extends('layouts.master')

@section('content')

<div class="container">

    <h2 class="header center-align">Cart</h2>

    <div class="col s12 m12 l12">
        <div class="row">

            @if(Session::has('cart'))

            <div class="card horizontal">
                <div class="card-content center-align">

                        <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                            @if($products)

                            @foreach($products as $product)

                            <tbody>
                            <tr>
                                <td>{{$product['items']['id']}}</td>
                                <td><img height="100" width="75" src="pictures/item/{{$product['items']['id']}}/{{$product['items']['photo']['file']}}"> </td>
                                <td><strong>{{$product['items'][ 'name']}}</strong></td>
                                <td><strong>{{$product['items'][ 'price']}}</strong></td>
                                <td>{{$product['size']}}</td>
                                <td>{{$product['qty']}}</td>
                                <td>{{$product['price']}}</td>
                                <td><a href="{{route('remove', ['id'=> $product['items']['id']])}}"><button type="submit" onclick="Materialize.toast('Product Deleted', 5000)" class="btn-floating waves-effect waves-light red">
                                            <i class="material-icons">delete</i></button></a>
                                </td>
                            </tr>
                            </tbody>

                            @endforeach

                            @endif

                    </table><br><hr>

                    <div id="total" class="row col-sm-offset-3">
                        <strong> Total Price : {{$totalPrice}}</strong><br>
                        <strong> Total Quantity : {{$totalQty}}</strong><br>

                    </div>

                    <a href="{{route('deleteCart')}}"><button id="clearCart" class="btn btn-danger">Clear your Cart</button></a>
                    {{--Second Page of customer information--}}


                    <a class="waves-effect waves-light red accent-1 btn">Proceed</a>

                    @else
                    <div class="card horizontal">
                        <div class="col s12 m12 l12 push-6">
                            <br><br><br>
                            <div class="card-content center-align">
                                <i class="material-icons">add_shopping_cart</i>
                                <p>Your cart is empty.</p>
                                <p>Get the items from the Menu</p>
                                <br><br><br>
                            </div>
                        </div><br><br>
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>


@endsection