 @extends('admin.includes.master')
 @section('content')
 <div id="page-wrapper">
 	<div class="row">
 		<div class="col-sm-6"  ><img src="{{url('upload/policy_documents')}}/{{$query->run_time_id}}" height="700px" width="550px"></div>
 		<div class="col-sm-6"  > 

<form action="{{url('dashboard/visiting-cart-update')}}" method="post">

                    {{ csrf_field() }} 
                    <input type="hidden" value="{{ $query->visiting_id}}" name="visiting_id">

 			<div class="form-group col-md-12">
 				<label for="districtname">description</label>
 				<textarea class="form-control" rows="9" cols="50" name="description"> {{ $query->description}} </textarea>
 			</div> 

 			<div class="form-group col-md-12">
 				<label for="districtname">Name</label>
 				<input type="text"   class="form-control" name="name"  value="{{ $query->name}}"/>   
 			</div> 
 			<div class="form-group col-md-12">
 				<label for="districtname">company name</label>
 				<input type="text"   class="form-control" name="company_name"  value="{{ $query->company_name}}"/>
 			</div> 
 			<div class="form-group col-md-12">
 				<label for="districtname">Email id</label>
 				<input type="text"   class="form-control" name="email_ids" value="{{ $query->email_ids}}"/>
 			</div> 
 			<div class="form-group col-md-12">
 				<label for="districtname">mobile no</label>
 				<input type="text"   class="form-control" name="mobile_nos" value="{{ $query->mobile_nos}}"/>
 			</div> 
 			<div class="form-group col-md-12">
 				<label for="districtname">designation</label>
 				<input type="text"   class="form-control" name="designation"  value="{{ $query->designation}}"/>
 			</div> 

 			<div class="form-group col-md-12">
 				<label for="districtname">address</label>
 				<input type="text"   class="form-control"  name="address" value="{{ $query->address}}"/>
 			</div>

 			<div class="form-group col-md-12  ">
 				<input type="submit" name="submit" class="btn btn-success" value="submit">
 			</div>

</form>
 		</div>
 	</div>
 </div>
 @endsection