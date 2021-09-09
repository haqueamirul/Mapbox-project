@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">All Newsletter</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>


                        <tbody>
                        	@foreach($allemail as $email)
                            <tr>
                                <td>{{$email->id}}</td>
                                <td>{{$email->email}}</td>
                                <!-- <td>
                                	<a href="#" class="btn btn-info">Edit</a>
                                	<a onclick="return confirm('Are you sure?')" href="#" class="btn btn-danger">Delete</a>
                                </td> -->
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
