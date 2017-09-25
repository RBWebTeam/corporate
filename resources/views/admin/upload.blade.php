 @extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<form method="post" action="{{URL::to('upload-file')}}" enctype="multipart/form-data">
                		{{csrf_field()}}
                	<h1 class="page-header">Upload your policies here</h1>
                    <div id="upload_div">
                      <input type="file" name="file" required>
                      <input type="date" name="expiry_date">
                      <button type="submit">upload</button>
                      <a href="#" class="add-more">Add More</a>
                    </div>

                	</form>
                    
                 </div>
            </div>
 </div>           

@endsection
