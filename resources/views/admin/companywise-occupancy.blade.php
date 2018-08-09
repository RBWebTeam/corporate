@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Companywise Occupancy Mapping
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
								
                                    <form role="form" method="post" action="{{url('company-occupancy-save')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-12 {{ $errors->has('occupancy') ? ' has-error' : '' }}">
                                         <label for="occupancy">Occupancy</label> 
                                         <select class="form-control" name="occup_id" >
                                         <option selected value="0">Select Occupancy</option>
                                          @foreach ($occupancy as $occup)
                                          <option value="{{$occup->occup_id}}"> {{$occup->occupancy_name}}</option>
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('occup_id') }}</small>

                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('product') ? ' has-error' : '' }}">
                                         <label for="product">Product</label> 
                                         <select class="form-control" name="product_id" required >
                                         <option selected value="0">Select Product</option>
                                          @foreach ($product as $prod)
                                          <option value="{{$prod->product_id}}"> {{$prod->product_name}}</option>
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('product_id') }}</small>

                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('company') ? ' has-error' : '' }}">
                                         <label for="company">Company</label>
                                         <select class="form-control" name="company_id" >
                                         <option selected value="0">Select Company</option>
                                          @foreach ($company as $comp)
                                          <option value="{{$comp->company_id}}"> {{$comp->company_name}}</option>
                                         @endforeach 
                                         </select>
                                         <small class="text-danger">{{ $errors->first('company_id') }}</small>
                                    </div> 

                                      <div class="form-group col-md-12 {{ $errors->has('discount_rate') ? ' has-error' : '' }}">
                                         <label for="discount_rate">Discount Rate</label>
                                         <input type="text" name="discount_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('discount_rate') }}</small>
                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('company_status') ? ' has-error' : '' }}">
                                         <label for="company_status">Company Status</label>
                                         <select class="form-control" name="company_status" >
                                         <option selected value="0">Select Company Status</option>
                                         <option value="Preferred">Preferred</option>
                                         <option value="Referral">Referral</option>
                                         <option value="Decline">Decline</option> 
                                         </select>
                                    </div> 

                                     <div class="form-group col-md-12 {{ $errors->has('storagetype') ? ' has-error' : '' }}">
                                         <label for="storagetype">Storage Type</label>
                                         <select class="form-control" name="storagetype" >
                                         <option selected>Select Storage Type</option>
                                         <option value="Closed">Closed</option>
                                         <option value="Open">Open</option>
                                        
                                         </select>
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

              

            <div class="panel panel-default">
        <div class="panel-heading">
          View Company Occupancy
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body table-responsive">
          
      
               <table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12 " id="dataTables-example" style="font-size: 12px;" >
              <!-- id="dataTables-example" -->


              <thead>
                <tr  style="background-color: #0099CC; color:white;" >
                  <th>Id</th>
                  <th>Occupancy Name</th>
                  <th>Product Name</th>
                  <th>Company Name</th>
                  <th>Discount Rate</th>
                  <th>Company Status</th>
                  <th>Storage Type</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
               @foreach($query as $value)
                      <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->occupancy_name}}</td>
                      <td>{{$value->product_name}}</td>
                      <td>{{$value->company_name}}</td>
                      <td>{{$value->discount_rate}}</td>
                      <td>{{$value->company_status}}</td>
                      <td>{{$value->storagetype}}</td>
                      <td>
                       <a href="{{url('company-occupancy-edit-view')}}/{{$value->id}}">Edit</a> ||
                        <a href="{{url('company-occupancy-delete')}}/{{$value->id}}" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                      </tr>
                @endforeach 
            </tbody>
          </table>
         

      </div>

    </div>
          
</div>

        @endsection
 