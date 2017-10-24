@extends('admin.includes.master')
@section('content')

<div id="page-wrapper">
 
 <div class="row">
  <div class="col-lg-6 mrg-top">
    <div class="panel panel-default">
      <div class="panel-heading">
        Product Master
      </div>
      @if (Session::has('msg'))
      <div class="alert alert-success" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <strong>Success!</strong> {{ Session::get('msg') }}  
     </div>
     @endif

     <div class="panel-body">
      <div class="row">
       
        <div class="col-lg-12">
          
          <form role="form" method="post" action="{{url('product-master-save')}}" >
            {{ csrf_field() }} 
            <div class="form-group col-md-12 {{ $errors->has('category') ? ' has-error' : '' }}" >
              <label for="category" class="col-form-label">Policy Category</label>                                     
              <select id="category" name="category" class="form-control">
                <option disabled selected>Select Category</option>
                @foreach($category as $pr)
                <option value="{{$pr->category_id}}">{{$pr->policy_category}}</option>
                @endforeach                                        
              </select>
            </div>
            <div class="form-group col-md-12 {{ $errors->has('product-name') ? ' has-error' : '' }}">
             <label for="productname">Product Name</label>
             <input type="text" name="productname" class="form-control" value="{{ old('productname')}}">
             <small class="text-danger">{{ $errors->first('productname') }}</small>
           </div>   
           
           <div class="col-md-12"> <button type="submit" class="btn btn-success">SAVE</button></div>
           
           
         </form>
       </div>
       
       
     </div>
     <!-- /.row (nested) -->
   </div>
   <!-- /.panel-body -->
 </div>
 <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div> 

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        View
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="vm-table">
            <thead>
              <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($query as $value)
              <tr>
                <td>{{$value->product_id}}</td>
                <td>{{$value->product_name}}</td>
                <td>{{$value->policy_category}}</td>
                <td>{{$value->datetime_created}}</td>
                <td>
                  <a href="{{url('product-master-edit-view')}}/{{$value->product_id}}">Edit</a>
                  ||
                  <a href="{{url('product-master-delete')}}/{{$value->product_id}}" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  
</div>            

</div>

@endsection
