@extends('layouts.admin-master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col s12 l11 offset-l2">

                <h3 class="center-align">Create Product</h3>

                @if(count($errors) > 0)

                @foreach($errors->all() as $error)
                <div class="card horizontal red white-text">
                    <div class="card-content">

                        <li>{{$error}}</li>

                    </div>
                </div>
                @endforeach

                @endif

                @if(Session::has('product_created'))

                    <div class="card horizontal cyan white-text">
                        <div class="card-content">

                            {{session('product_created')}}

                        </div>
                    </div>
                @endif

                <div class="card horizontal">

                    {!! Form::open(['method'=>'POST', 'action'=>'ProductController@store', 'files'=>true , ]) !!}

                    <div class="card-content col s12  m12 l6">

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
                    </div>
                    <div class="card-content col s12  m12 l6">

                        <label>Xlarge</label>
                        {!! Form::text('xlarge', null) !!}

                        <label>large</label>
                        {!! Form::text('large', null) !!}

                        <label>Medium</label>
                        {!! Form::text('medium', null) !!}

                        <label>Small</label>
                        {!! Form::text('small', null) !!}

                    {!! Form::submit('Create Product', ['class'=>"waves-effect waves-light btn red accent-1 "]) !!}

                        {!! Form::close() !!}
                    </div>
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