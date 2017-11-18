 
 @extends('admin.includes.master')
 @section('content')
 <style>
.vl {
    border-left: 6px ;
    height: 500px;
    margin-left: 50%;
}
</style>


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
            <input type="hidden" name="type" value="motor">
           	 <div class="form-group col-md-4">
               <h2>Non Motor</h2>
           	 	<div class="form-group">
	           	<label for="excel" class="col-form-label ">File</label>
	           	<input type="file" name="excel" id="excel" class="form-control " required>
	           </div>
	           <div class="form-group">
	           	 <button type="submit" class="btn btn-primary  ">Upload</button>

	           	 <a download="upload_fomart.csv" href="{{URL::to('upload_format/upload_format_non_motor.csv')}}" class="btn btn-primary ">Download Sample Format</a>
	           	</div>
        	</div>
          <div class="vl">
           </form> 
           <form action="upload-excel" method="POST" enctype="multipart/form-data" >
            
            {{csrf_field()}}
            <input type="hidden" name="type" value="motor">
             <div class="form-group col-md-8">
              <h2>Motor</h2>
              <div class="form-group">
              <label for="excel" class="col-form-label ">File</label>
              <input type="file" name="excel" id="excel_motor" class="form-control " required>

             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary  ">Upload</button>

               <a download="upload_fomart.csv" href="{{URL::to('upload_format/upload_format_motor.csv')}}" class="btn btn-primary ">Download Sample Format</a>
              </div>
          </div>
          
           </form> 

        </div>
        </div>

   

        @endsection
