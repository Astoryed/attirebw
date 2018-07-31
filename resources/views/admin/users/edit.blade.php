@extends('layouts.admin-master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col s12 l11 offset-l2">

                <h3 class="center-align">Edit Admin</h3>

                <div class="card horizontal">
                    <div class="card-content">

                        <table id="adminTable" class="responsive-table striped">
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
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection