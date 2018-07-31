@extends('layouts.admin-master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col s12 m12 l11 offset-l2">

                <h3 class="center-align">Admin Index</h3>


                @if(Session::has('admin_deleted'))

                <div class="card horizontal red white-text">
                    <div class="card-content">

                        {{session('admin_deleted')}}

                    </div>
                </div>

                @endif

                    <div class="card-content">

                        <div class="table-responsive-vertical shadow-z-1">

                        <table id="table" class="table table-hover table-mc-light-blue">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                {{--<th>Delete</th>--}}
                            </tr>
                            </thead>

                            <tbody>
                            @if($admins)
                                @foreach($admins as $admin)
                                    <tr>
                                        <td data-title="ID">{{$admin->id}}</td>
                                        <td data-title="Name">{{$admin->name}}</td>
                                        <td data-title="Email">{{$admin->email}}</td>
                                        <td data-title="Created At">{{$admin->created_at->diffForHumans()}}</td>
                                        <td data-title="Updated At">{{$admin->updated_at->diffForHumans()}}</td>
                                        <td data-title="Delete">
                                            {!! Form::open(['method'=>'POST', 'action'=> ['AdminUserController@destroy', $admin->id]]) !!}

                                            {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                                            {{--<div class="form-group">--}}
                                                {{--<button type="submit" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>--}}
                                            {{--</div>--}}

                                            {{--{!! Form::close() !!}--}}

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
    </div>

@endsection