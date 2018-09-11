@extends('layouts.admin.masters')
@section('content')
 <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Admin's dashboard</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        @if(Auth::check())
                        <p>Welcome {{Auth::user()->name}}</p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-user dashboard-div-icon" ></i>
                         <h2>{{$users->count()}}</h2>
                         <h5>No of Users</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                            <h2>10000</h2>
                            <h5>Available Hectares</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                            <h2>{{$investors->count()}}</h2>
                            <h5>Number of sponsors</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                            <h2>{{$farmers->count() }}</h2>
                            <h5>Number of farmers</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection