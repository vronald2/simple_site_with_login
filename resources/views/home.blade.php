@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">Username</td>
                                    <td> {{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">FirstName</td>
                                    <td> {{ Auth::user()->first_name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">LastName</td>
                                    <td> {{ Auth::user()->last_name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Email</td>
                                    <td> {{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Phone</td>
                                    <td> {{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Created At</td>
                                    <td> {{ Auth::user()->created_at }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Updated At</td>
                                    <td> {{ Auth::user()->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection