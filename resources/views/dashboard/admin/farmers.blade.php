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
                            <div class="table-responsive">
                                <table class="farmers-table table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><a href="#">Name</a></th>
                                            <th>Farm Produce</th>
                                            <th>Date of Application</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Daniel Chinagozi</td>
                                            <td>Cattle</td>
                                            <td>Male</td>
                                            <td>Pending <i class=" fa status"></i></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ezinne Uzoije</td>
                                            <td>Lagos</td>
                                            <td>Female</td>
                                            <td>Make admin</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Josh Onwughalu</td>
                                            <td>Lagos</td>
                                            <td>N 90, 000</td>
                                            <td>Current</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Daniel Chinagozi</td>
                                            <td>Lagos</td>
                                            <td>N 90, 000</td>
                                            <td>Current</td>
                                        </tr>
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