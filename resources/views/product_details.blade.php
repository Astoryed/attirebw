@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <h2 class="header center-align">Products Details</h2>

        <!---Left Side Profile Picture-->

        <div class="col s12 m12 l6">

            <div class="card horizontal">

                <img class="xzoom" src="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}"
                xoriginal="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}" />

                <div class="xzoom-thumbs hide-on-small-only">
                    <a href="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}">
                        <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}"
                    xpreview="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}">
                    </a>

                    <a href="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}">
                    <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}"
                    xpreview="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}">
                    </a>

                    <a href="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                    <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}"
                    xpreview="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                    </a>
                </div>

            </div>

            <div class="card horizontal show-on-small hide-on-med-and-up">

            <div class="xzoom-thumbs" style="padding: 5%;">
                <a href="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}">
                    <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}"
                         xpreview="../{{$product->photo ? "pictures/item/$product->id/1.jpg": 'pictures/item/placeholder.jpg'}}">
                </a>

                <a href="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}">
                    <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}"
                         xpreview="../{{$product->photo ? "pictures/item/$product->id/2.jpg": 'pictures/item/placeholder.jpg'}}">
                </a>

                <a href="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                <img class="xzoom-gallery" width="80" src="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}"
                xpreview="../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                </a>
            </div>
        </div>

        </div>




        <!---Right Side Text-->
        <div class="col s12 m12 l6">


            <div id="detailsBox" class="card horizontal">
                <div class="card-content center-align">

                    <h3>{{$product->name}}</h3>
                    <h5>Rs {{$product->price}}</h5>
                    <p>{{$product->details}}</p><br>

                    <form method="POST" action="{{route('addToCart', $product->id)}}" >
                        {!! csrf_field() !!}

                        <div id="size-opt">

                        @if($product->xlarge)
                            <input name="size" class="with-gap" type="radio" id="xlarge" value="X-large" />
                            <label for="xlarge">X-Large</label>
                        @endif

                        @if($product->large)
                            <input name="size" class="with-gap" type="radio" id="large" value="Large" />
                            <label for="large">Large</label>
                        @endif

                        @if($product->medium)
                            <input name="size" class="with-gap" type="radio" id="medium" value="Medium"  />
                            <label for="medium">Medium</label>
                        @endif

                        @if($product->small)
                            <input name="size" class="with-gap" type="radio" id="small" value="Small"  />
                            <label for="small">Small</label>
                        @endif

                        </div><br>

                    <div class="input-field" style="display:inline-flex">

                        <div onclick="decFunction()">
                            <a class="btn-floating btn-small waves-effect waves-light red accent-1">
                                <i class="material-icons">remove</i>
                            </a>
                        </div>


                        <div>
                            <input class="input-btn center-align" id="myNumber" type="number" min="1" max="1000" value="2" name="qty">
                        </div>

                        <div>
                            <a class="btn-floating btn-small waves-effect waves-light red accent-1" onclick="incFunction()">
                                <i class="material-icons">add</i>
                            </a>
                        </div>


                    </div><br><br><br>
                        <button type="submit" onclick="Materialize.toast('Product Added', 4000)" class="waves-effect waves-light red accent-1 btn">
                            <i class="material-icons right">shop</i>Add To Cart</button>

                    </form>

                </div>
            </div>

        </div>
        <!---Right Side Text End-->


        <!--Related Product Section-->


        <div class="row">

            <div class="col l12 m12 s12 center-align">
                <h3>Related Products</h3>
            </div>

        @if($items)
            @foreach($items as $item)

                <!--Coloumn Start-->
                    <div class="col l3 m4 s12">

                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="{{ route('details', $item->id) }}">
                                    <img class="responsive-img" src="{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">
                                </a>
                            </div>

                            <div class="card-content">
                                  <span class="card-title activator grey-text text-darken-4">
                                    {{$item->name}}
                                  </span>
                                <p>Rs:{{$item->price}}</p>
                            </div>

                        </div>

                    </div>
                    <!--Coloumn End-->

                @endforeach
            @endif
        </div>


    </div>
</div>

<script>
    function decFunction() {
        document.getElementById("myNumber").stepDown(1);
    }
    function incFunction() {
        document.getElementById("myNumber").stepUp(1);
    }
</script>
@endsection