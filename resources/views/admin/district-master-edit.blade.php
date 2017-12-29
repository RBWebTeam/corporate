@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Update District Master
                        </div>
                    
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-12">
								
                                    <form role="form" method="post" action="{{url('district-master-update')}}" >
                                      {{ csrf_field() }} 
                                       <div class="form-group col-md-12 {{ $errors->has('state') ? ' has-error' : '' }}" >
                                      <label for="state" class="col-form-label">Select State</label>                                     
                                      <select id="state" name="state" class="form-control">
                                        <option disabled selected>Select State</option>
                                        @foreach($state as $st)
                                        @if($st->state==$query1->state)
                                           <option selected value="{{$st->state_id}}">{{$st->state}}</option>
                                            @else
                                          <option value="{{$st->state_id}}">{{$st->state}}</option>
                                          @endif                                          
                                        @endforeach                                        
                                      </select>
                                    </div>
                                     <div class="form-group col-md-12 {{ $errors->has('zone') ? ' has-error' : '' }}" >
                                      <label for="zone" class="col-form-label">Select Zone</label>                                     
                                      <select id="zone" name="zone" class="form-control">
                                        <option disabled selected>Select Zone</option>
                                        @foreach($zone as $zn)
                                        @if($zn->zone==$query1->zone)
                                        <option selected value="{{$zn->zone_id}}">{{$zn->zone}}</option>
                                        @else
                                          <option value="{{$zn->zone_id}}">{{$zn->zone}}</option>
                                           @endif 
                                        @endforeach                                        
                                      </select>
                                    </div>
                                   <div class="form-group col-md-12">
                                         <label for="districtname">District Name</label>
                                         <input type="text" name="districtname" class="form-control" value="{{ $query1->district_name}}">
                                         <small class="text-danger">{{ $errors->first('districtname') }}</small>
                                    </div>  
                                    <input type="hidden" name="districtid" value= "{{$query1->district_id}}">
                                     
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
 