@extends('layouts.admin-master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col s12 m12 l11 offset-l2">

            <h3 class="center-align">Product Index</h3>


            @if(Session::has('product_deleted'))

                <div class="card horizontal red white-text">
                    <div class="card-content">

                        {{session('product_deleted')}}

                    </div>
                </div>
            @endif

            @if(Session::has('product_updated'))

                <div class="card horizontal cyan white-text">
                    <div class="card-content">

                        {{session('product_updated')}}

                    </div>
                </div>
            @endif

            <div class="table-responsive-vertical shadow-z-1" style="font-size: 12px;">

            <table id="table" class="table table-hover table-mc-light-blue">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Size with Quantity</th>
                    <th>Details</th>
                    <th>Created</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>

                @if($products)
                    @foreach($products as $product)

                        <tr>
                            <td data-title="ID">{{$product->id}}</td>
                            <td data-title="Photo">
                                <img class="img-rounded" height="100" width="75" src="{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}"></td>
                            <td data-title="Name"><a href="{{route('products.edit',$product->id)}}"><b>{{$product->name}}</b></a></td>
                            <td data-title="Category">{{$product->category}}</td>
                            <td data-title="Price">Rs:{{$product->price}}</td>
                            <td data-title="Size with Quantity">X-large:{{$product->xlarge}}<br>Large:{{$product->large}}<br>Medium: {{$product->medium}}<br>Small: {{$product->small}} </td>
                            <td data-title="Details">{{$product->details}}</td>
                            <td data-title="Created">{{$product->created_at->diffForHumans()}}</td>
                            <td data-title="Delete">
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductController@destroy', $product->id]]) !!}

                                <div class="form-group">
                                    <button type="submit" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                </div>

                                {!! Form::close() !!}

                            </td>
                        </tr>

                    @endforeach
                @endif

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@stop