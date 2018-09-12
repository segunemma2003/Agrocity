@extends('layouts.dashboard.master')
@section('content')
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">All Users</h4>
                </div>

            </div>
            <div class="row">
               <!--  <div class="col-md-12">
                    <div class="alert alert-success">
                        <p>Welcome Mr Bamidele Segun</p>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            My sponsors and investors
                        </div>
                        <div class="panel-body">
                            @if($users->isEmpty())
                            <div class="alert alert-danger">NO users yet</div>
                            @else
                            <div class="table-responsive">
                                <table class="farmers-table table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><a href="#">Name</a></th>
                                            <th>Type of Member</th>
                                            <th>Gender</th>
                                            <th>Make admin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as @user)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>Admin</td>
                                            <td>Male</td>
                                            <td><a href="#" class="btn btn-primary">Make Admin</a></td>
                                        </tr>
                                        @
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection