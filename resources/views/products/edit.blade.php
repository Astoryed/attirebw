@extends('layouts.admin-master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col s12 l11 offset-l2">

                <h3 class="center-align">Edit Product</h3>


                <div class="card horizontal">

                    <div class="card-content center-align col s12  m6 l6">

                        <img class="responsive-img" src="../../{{$product->photo ? "pictures/item/$product->id/{$product->photo->file}": 'pictures/item/placeholder.jpg'}}">

                    </div>

                    <div class="card-content col s12  m6 l6">

                {!! Form::model($product,['method'=>'PATCH', 'action'=>['ProductController@update', $product->id],'files'=> true ]) !!}


                <div class="input-field">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null) !!}
                </div>

                <div class="input-field">
                    {!! Form::select('category',['' =>'Choose Category'] + array(
                    'Pret'=>'Pret',
                    'SemiFormals'=>'Semi-Formals',
                    'LuxuryPret'=>'Luxury-Pret',
                    'HotSellers'=>'Hot-Sellers',
                    'NewArrivals'=>'New Arrivals'), null, ['class'=>'category']) !!}
                </div>

                <div class="input-field">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null) !!}
                </div>

                <div class="input-field">
                    {!! Form::label('details', 'Details:') !!}
                    {!! Form::text('details', null) !!}
                </div>

                <div class="file-field input-field">
                    <div class="btn red accent-1">
                        <span>Add Photo</span>
                        {!! Form::file('photo_id[]', ['multiple' => 'multiple'] ) !!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>


                        <label>Xlarge</label>
                        {!! Form::text('xlarge', null) !!}

                        <label>Large</label>
                        {!! Form::text('large', null) !!}

                        <label>Medium</label>
                        {!! Form::text('medium', null) !!}

                        <label>Small</label>
                        {!! Form::text('small', null) !!}


                        {!! Form::submit('Edit Product', ['class'=>"waves-effect waves-light btn red accent-1 "]) !!}

                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>


    <script>

        <!--Form Select Options-->
        $(document).ready(function() {
            $('.category').material_select();
        });


    </script>

@endsection