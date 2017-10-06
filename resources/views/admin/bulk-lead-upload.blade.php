 
 @extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
 	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Your XL here</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 			@if(Session::has('msg'))
                <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success!</strong> {{ Session::get('msg') }}  
               </div>
               @endif
           <form action="upload-excel" method="POST" enctype="multipart/form-data" >
           	{{csrf_field()}}
           	 <div class="form-group col-md-4">
           	 	<div class="form-group">
	           	<label for="excel" class="col-form-label ">File</label>
	           	<input type="file" name="excel" id="excel" class="form-control " required>
	           </div>
	           <div class="form-group">
	           	 <button type="submit" class="btn btn-primary  ">Upload</button>

	           	 <a download="upload_fomart.csv " href="{{URL::to('upload_format/upload_format.csv')}}" class="btn btn-primary ">Download Sample Format</a>
	           	</div>
        	</div>
          
           </form> 

        
        </div>

   

        @endsection
