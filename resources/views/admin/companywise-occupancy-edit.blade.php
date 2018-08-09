@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Companywise Occupancy Mapping
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

								
                                    <form role="form" method="post" action="{{url('company-occupancy-update')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-12 {{ $errors->has('occupancy') ? ' has-error' : '' }}">
                                         <label for="occupancy">Occupancy</label> 
                                         <select class="form-control" name="occup_id" >
                                         <option disabled selected value="0">Select Occupancy</option>
                                          @foreach ($occupancy as $occup)

                                          @if($occup->occup_id == $query1->occup_id)
                                          <option selected value="{{$occup->occup_id}}"> {{$occup->occupancy_name}}</option>

                                          @else
                                         
                                          <option value="{{$occup->occup_id}}"> {{$occup->occupancy_name}}</option>
                                           @endif
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('occup_id') }}</small>
                                          
                                    </div>
                                    <input type="hidden" name="mapid" value= "{{$query1->id}}">

                                    <div class="form-group col-md-12 {{ $errors->has('product') ? ' has-error' : '' }}">
                                         <label for="product">Product</label> 
                                         <select class="form-control" name="product_id" required >
                                         <option disabled selected value="0">Select Product</option>
                                          @foreach ($product as $prod)
                                          @if($prod->product_id == $query1->productid)
                                          <option selected value="{{$prod->product_id}}">{{$prod->product_name}}</option>
                                          @else
                                          <option value="{{$prod->product_id}}"> {{$prod->product_name}}</option>
                                          @endif
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('product_id') }}</small>

                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('company') ? ' has-error' : '' }}">
                                         <label for="company">Company</label>
                                         <select class="form-control" name="company_id" >
                                         <option selected value="0">Select Company</option>
                                          @foreach ($company as $comp)
                                           @if($comp->company_id == $query1->company_id)
                                            <option selected value="{{$comp->company_id}}"> {{$comp->company_name}}</option>
                                            @else
                                          <option value="{{$comp->company_id}}"> {{$comp->company_name}}</option>
                                          @endif
                                         @endforeach 
                                         </select>
                                         <small class="text-danger">{{ $errors->first('company_id') }}</small>
                                    </div> 

                                      <div class="form-group col-md-12 {{ $errors->has('discount_rate') ? ' has-error' : '' }}">
                                         <label for="discount_rate">Discount Rate</label>

                                         <input type="text" name="discount_rate" class="form-control" value="{{$query1->discount_rate}}">
                                         <small class="text-danger">{{ $errors->first('discount_rate') }}</small>
                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('company_status') ? ' has-error' : '' }}">
                                         <label for="company_status">Company Status</label>
                                         <select class="form-control" name="company_status" >
                                      
                                          <option   value="Preferred" <?php ($query1->company_status== "Preferred")? 'selected': ''; ?>>Preferred</option>
                                          <option value="Referral" <?php ($query1->company_status== "Referral")? 'selected': ''; ?> >Referral</option>
                                           <option value="Decline" <?php ($query1->company_status== "Decline")? 'selected': ''; ?>>Decline</option>
                                        
                                         </select>
                                    </div> 

                                     <div class="form-group col-md-12 {{ $errors->has('storagetype') ? ' has-error' : '' }}">
                                         <label for="storagetype">Storage Type</label>
                                         <select class="form-control" name="storagetype" >
                                       
                                         <option value="Closed" <?php ($query1->storagetype== "Closed")? 'selected': ''; ?>>Closed</option>
                                         <option value="Open" <?php ($query1->storagetype== "Open")? 'selected': ''; ?>>Open</option>
                                        
                                         </select>
                                    </div>
                                     
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
 