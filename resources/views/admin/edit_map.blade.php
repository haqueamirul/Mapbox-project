@extends('layouts.admin')

@section('content')
	<div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title"><a href="{{route('home')}}">Go to back</a></h4>
                <!-- <ol class="breadcrumb pull-right">
                    <li><a href="#">THICN</a></li>
                    <li><a href="#">ALL Events</a></li>
                </ol> -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Map Details</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                    	<div class="col-md-2"></div>
                        <div class="col-sm-6 col-xs-12 col-md-8">

                            <div class="m-t-20">

                                <input type="hidden" name="id" value="{{$location->id}}">

                                <!-- <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Name</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>{{$location->title}}</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Why do you feel unsafe here?</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>{{$location->ques_one}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">What do you feel would help make the Isle of Dogs Safer and what services would you like to see?</h3>
                                        </div>
                                        <div class="panel-body">
                                          <p>{{$location->ques_two}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Additional comments</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>{{$location->description}}</p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-2"></div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
@endsection
