@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">All News</h3>
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
                                <th>Id</th>
                                <th>Title</th>
                                <!-- <th>Description</th> -->
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        	@foreach($news as $single_news)
                            <tr>
                                <td>{{$single_news->id}}</td>
                                <td>{{$single_news->title}}</td>
                                <!-- <td>{{ Str::limit($single_news->description, 50) }}{!! $single_news->description !!}</td> -->
                                <td><img src="{{asset('images')}}/{{$single_news->newstimage}}" style="max-width: 60px;"></td>
                                <td>
                                	<a href="/edit-news/{{$single_news->id}}" class="btn btn-info">Edit</a>
                                	<a onclick="return confirm('Are you sure?')" href="/delete-news/{{$single_news->id}}" class="btn btn-danger">Delete</a>
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
@endsection
