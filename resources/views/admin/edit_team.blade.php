@extends('layouts.admin')

@section('content')
	<div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Edit Team</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">THICN</a></li>
                    <li><a href="#">ALL Team</a></li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
										<div class="col-md-6">
											<h4 class="pull-left page-title">Edit Team</h4>
										</div>
										<div class="col-md-6 text-right">
											<a href="{{route('ourTeam')}}"> <button type="button" class="btn btn-dark waves-effect waves-light">All Team</button> </a>
										</div>
									</div>
                </div>

                <div class="panel-body">
                    <div class="row">
                    	<div class="col-md-2"></div>
                        <div class="col-sm-6 col-xs-12 col-md-8">
                            @if(Session::has('team_updated'))
                            <div class="alert alert-success" role="alert">
                            	{{Session::get('team_updated')}}
                            </div>
                            @endif
                            <div class="m-t-20">
                                <form method="POST" action="{{route('update.team')}}" enctype="multipart/form-data">
                                	@csrf
                                	<input type="hidden" name="id" value="{{$team->id}}">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$team->name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="description" class="form-control" value="{{$team->description}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook Link</label>
                                        <input type="text" name="facebook" class="form-control" value="{{$team->facebook}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter Link</label>
                                        <input type="text" name="twitter" class="form-control" value="{{$team->twitter}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Linkedin Link</label>
                                        <input type="text" name="linkedin" class="form-control" value="{{$team->linkedin}}"/>
                                    </div>

                                    <!-- <div class="panel-body">
                                        <div class="summernote">Hello Summernote</div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="file">Choose Team Image</label>
                                        <input type="file" name="eventimage" class="form-control" value="{{asset('images')}}/{{$team->teamimage}}" onchange="previewFile(this)" />
                                        <img id="previewImg" src="{{asset('images')}}/{{$team->teamimage}}" style="max-width: 130px;margin-top: 20px;" />
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-2"></div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    	<script>
    		function previewFile(input){
    			var file=$("input[type=file]").get(0).files[0];
    			if(file)
    			{
    				var reader = new FileReader();
    				reader.onload = function(){
    					$('#previewImg').attr("src",reader.result);
    				}
    				reader.readAsDataURL(file);
    			}
    		}
    	</script>
	@endpush
@endsection
