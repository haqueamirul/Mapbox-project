@extends('layouts.admin')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Dashboard</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">THICN</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Added Map</h4>
                    </div>
                    <?php $mapCount = App\Boxmap::count(); ?>
                    <div class="panel-body">
                        <h3 class=""><b>{{$mapCount}}</b></h3>
                        <p class="text-muted"><b>48%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Subscriber</h4>
                    </div>
                    <?php $subcriptionCount = App\Newslatter::count(); ?>
                    <div class="panel-body">
                        <h3 class=""><b>{{$subcriptionCount}}</b></h3>
                        <p class="text-muted"><b>15%</b> Orders in Last 10 months</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Visitors</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $projects = App\Counter::latest()->paginate(5);
                      App\Counter::increment('views'); ?>
                      @foreach($projects  as $project)
                        <h3 class=""><b>{{$project->views}}</b></h3>
                      @endforeach
                        <p class="text-muted"><b>65%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Monthly Earnings</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>$2779.7</b></h3>
                        <p class="text-muted"><b>31%</b> From Last 1 month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Maps Information</h3>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('event_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('event_deleted')}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <!-- <th>Name</th> -->
                                            <th>Message</th>
                                            <th>Question 1</th>
                                            <th>Question 2</th>
                                            <!-- <th>Question 3</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @php
                                        $locations =App\Boxmap::all();
                                        @endphp

                                        @foreach($locations  as $location)
                                            <tr>
                                                <td>{{ $location->id }}</td>
                                                <!-- <td>{{ $location->title }}</td> -->
                                                <td>{{ Str::limit($location->description, 50) }}</td>
                                                <td>{{ Str::limit($location->ques_one, 50) }}</td>
                                                <td>{{ Str::limit($location->ques_two, 50) }}</td>
<!--                                                 <td>{{ Str::limit($location->que_three, 50) }}</td> -->
                                                <td>
                                                    <a href="/view-map/{{$location->id}}" class="btn btn-info">Details</a>
                                                    <a onclick="return confirm('Are you sure?')" href="/delete-map/{{$location->id}}" class="btn btn-danger">Delete</a>
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


        </div> <!-- End Row -->


    </div> <!-- container -->

</div> <!-- content -->
@endsection
