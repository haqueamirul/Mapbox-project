@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-6">
              <h3 class="panel-title">Our Team</h3>
            </div>
            <div class="col-md-6 text-right">
              <a href="{{route('addTeam')}}"> <button type="button" class="btn btn-dark waves-effect waves-light">Add Team</button> </a>
            </div>
          </div>
        </div>
        <div class="panel-body">
        	@if(Session::has('team_deleted'))
            <div class="alert alert-danger" role="alert">
            	{{Session::get('team_deleted')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        	@foreach($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{ Str::limit($team->description, 50) }}</td>
                                <td><img src="{{asset('images')}}/{{$team->teamimage}}" style="max-width: 60px;"></td>
                                <td>
                                	<a href="/edit-team/{{$team->id}}" class="btn btn-info">Edit</a>
                                	<a onclick="return confirm('Are you sure?')" href="/delete-team/{{$team->id}}" class="btn btn-danger">Delete</a>
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
