@extends('layouts.dashboard.master')
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
                        <p>Welcome {{Auth::user()->name}}</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-venus dashboard-div-icon" ></i>
                         <h2>N 200</h2>
                         <h5>Available coins</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                            <h2>2</h2>
                            <h5>Number farms</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                            <h2>3</h2>
                            <h5>Number of sponsors</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                            <h2>7</h2>
                            <h5>Completed farms</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection