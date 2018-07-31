@extends('layouts.admin-master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col s12 l11 offset-l2">

                <h3 class="center-align">Create Admin</h3>

                @if(Session::has('admin_created'))

                    <div class="card horizontal cyan white-text">
                        <div class="card-content">

                             {{session('admin_created')}}

                        </div>
                    </div>
                @endif


                <div class="card horizontal">
                    <div class="card-content">

                        {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files'=> true ]) !!}
                        @csrf

                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name') !!}

                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null) !!}

                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', null) !!}

                            {!! Form::submit('Create Admin', ['class'=>"waves-effect waves-light btn red accent-1 "]) !!}


                        {!! Form::close() !!}

                    </div>
                </div>

                @if(count($errors) > 0)

                        @foreach($errors->all() as $error)
                        <div class="card horizontal red white-text">
                            <div class="card-content">

                        <li>{{$error}}</li>

                            </div>
                        </div>
                        @endforeach

                @endif

            </div>
        </div>
    </div>



@endsection