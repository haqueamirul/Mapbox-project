@extends('layouts.admin')

@section('content')
	<div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Add Team</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">THICN</a></li>
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
											<h4 class="pull-left page-title">Add Team</h4>
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
                            @if(Session::has('team_added'))
                            <div class="alert alert-success" role="alert">
                            	{{Session::get('team_added')}}
                            </div>
                            @endif

                            <div class="m-t-20">
                                <form method="POST" action="{{route('store.team')}}" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required placeholder="Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="description" class="form-control" required placeholder="Designation"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook Link</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="facebook"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter Link</label>
                                        <input type="text" name="twitter" class="form-control" placeholder="Twitter"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Linkedin Link</label>
                                        <input type="text" name="linkedin" class="form-control" placeholder="Linkedin"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Choose Profile Image</label>
                                        <input type="file" name="eventimage" class="form-control" onchange="previewFile(this)" />
                                        <img id="previewImg" style="max-width: 130px;margin-top: 20px;" />
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
