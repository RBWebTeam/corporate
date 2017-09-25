 @extends('admin.includes.master')
 @section('content')

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<form method="post" action="{{URL::to('upload-file')}}" enctype="multipart/form-data">
                		{{csrf_field()}}
                	<h1 class="page-header">Upload your policies here</h1>
                    <div class="form-group"><label  class="col-sm-2 col-form-label">Choose File</label><input type="file" name="file[]" class="col-sm-10" required><input type="date" name="expiry_date" class="form-control "><a class="upload btn btn-primary">upload</a></div>
                    <a href="#" class="add-more btn btn-primary col-sm-12" >Add More</a>
                	</form>
                    
                 </div>
            </div>
 </div>           

@endsection
