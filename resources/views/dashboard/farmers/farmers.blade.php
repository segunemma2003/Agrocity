@extends('layouts.dashboard.master')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">my farms</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                <!--     <div class="alert alert-success">
                        <p>Welcome Mr Bamidele Segun</p>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Number of farms alloted to you.
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="farmers-table table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Farm size</th>
                                            <th>Location</th>
                                            <th>Duration</th>
                                            <th>Inspector</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>I hectare</td>
                                            <td>Azumiri</td>
                                            <td>6 months</td>
                                            <td>Mr Segun Bamidele</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>I hectare</td>
                                            <td>Azumiri</td>
                                            <td>1 year</td>
                                            <td>Mr Segun Amara</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>I hectare</td>
                                            <td>Azumiri</td>
                                            <td>3 months</td>
                                            <td>Mr Segun Amara</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>I hectare</td>
                                            <td>Azumiri</td>
                                            <td>2 years</td>
                                            <td>Mr Segun Amara</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>I hectare</td>
                                            <td>Azumiri</td>
                                            <td>1 year</td>
                                            <td>Mr Segun Amara</td>
                                            <td>Active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection