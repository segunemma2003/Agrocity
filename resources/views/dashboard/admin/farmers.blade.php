@extends('layouts.admin.masters')
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
                            All Farmers
                        </div>
                        <div class="panel-body">
                            @if($users->isEmpty())
                                    
                                        <div class="alert alert-danger">
                                        There are no request yet 
                                        </div>
                                    
                                    @else
                                    @foreach($users as $user)
                                    @if(!isset($user->farmer))
                                    <div class="alert alert-danger">
                                        There are no request yet 
                                        </div>
                                    @endif
                                    @endforeach
                            @endif
                            @if($users->isEmpty())
                            <div></div>
                            @else
                            <div class="table-responsive">
                                <table class="farmers-table table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Farm Produce</th>
                                            <th>Date of Application</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($users as $user)
                                    @if(!isset($user->farmer))
                                    <tr>
                                        <th></th>
                                    </tr>
                                    @else
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td><a href="{{ route('farmer.name',$user->id)}}">{{$user->name}}</a></td>
                                            <td></td>
                                            <td>{{$user->farmer->gender?$user->farmer->gender:"No application yet"}}</td>
                                            <td>Pending <i class=" fa status"></i></td>
                                        </tr>

                                    @endif
                                    @endforeach
                                    {{$users->links()}}
                                    @endif
                                     </tbody>
                                </table>

                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>
@endsection