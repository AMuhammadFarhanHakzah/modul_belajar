@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>All users</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-4">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 15px;">
                                            @foreach ($users as $key => $user)
                                                <tr class="align-middle">
                                                    <td>{{++$key}}</td>
                                                    <td> {{$user->name}} </td>
                                                    <td> {{$user->email}} </td>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
