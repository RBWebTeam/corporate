@extends('admin.includes.master')
@section('content')

<div id="page-wrapper">
 
 <div class="row">
  <div class="col-lg-6 mrg-top">
    <div class="panel panel-default">
      <div class="panel-heading">
       Update Product Master
     </div>
     
     <div class="panel-body">
      <div class="row">
       
        <div class="col-lg-12">
          
          <form role="form" method="post" action="{{url('product-master-update')}}" >
            {{ csrf_field() }} 
            <div class="form-group col-md-12 {{ $errors->has('category') ? ' has-error' : '' }}" >
              <label for="category" class="col-form-label">Policy Category</label>                                     
              <select id="category" name="category" class="form-control">
                <option disabled selected>Select Category</option>
                @foreach($category as $pr)
                @if($pr->policy_category==$query1->policy_category)
                <option selected value="{{$pr->category_id}}">{{$pr->policy_category}}</option>
                
                @else
                <option value="{{$pr->category_id}}">{{$pr->policy_category}}</option>
                @endif
                @endforeach                                        
              </select>
            </div>
            <div class="form-group col-md-6 {{ $errors->has('product-name') ? ' has-error' : '' }}">
             <label for="productname">Product Name</label>
             <input type="text" name="productname" class="form-control" value="{{$query1->product_name}}">
             <small class="text-danger">{{ $errors->first('productname') }}</small>

           </div>  
           <input type="hidden" name="productid" value= "{{$query1->product_id}}">
           
           <div class="col-md-12"> <button type="submit" class="btn btn-success">Update</button></div>  
           
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
</div>

@endsection
