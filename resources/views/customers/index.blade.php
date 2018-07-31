@extends('layouts.admin-master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col s12 m12 l11 offset-l2">

            <h3 class="center-align">Customers Index</h3>

                <div class="table-responsive-vertical shadow-z-1">

                    <table id="table" class="table table-hover table-mc-light-blue">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>

                        </tr>
                        </thead>

                        <tbody>
                        @if($customers)
                        @foreach($customers as $customer)
                        <tr>
                            <td data-title="ID">{{$customer->id}}</td>
                            <td data-title="First Name">{{$customer->name}}</td>
                            <td data-title="Email">{{$customer->email}}</td>
                            <td data-title="Created At">{{$customer->created_at->diffForHumans()}}</td>
                            <td data-title="Updated At">{{$customer->updated_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>

        </div>
    </div>
</div>

@endsection