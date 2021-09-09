@extends('layouts.admin')

@section('content')
	<div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Add News</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">THICN</a></li>
                    <li><a href="#">ALL News</a></li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Add News</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                    	<div class="col-md-2"></div>
                        <div class="col-sm-6 col-xs-12 col-md-8">
                            @if(Session::has('news_added'))
                            <div class="alert alert-success" role="alert">
                            	{{Session::get('news_added')}}
                            </div>
                            @endif
                            <div class="m-t-20">
                                <form method="POST" action="{{route('store.news')}}" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div>
                                            <textarea name="description" class="summernote" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Choose Featured Image</label>
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
