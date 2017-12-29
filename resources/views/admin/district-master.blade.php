@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            District Master
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
								
                                    <form role="form" method="post" action="{{url('district-master-save')}}" >
                                      {{ csrf_field() }} 
                                      <div class="form-group col-md-12 {{ $errors->has('state') ? ' has-error' : '' }}" >
                                      <label for="state" class="col-form-label">Select State</label>                                     
                                      <select id="state" name="state" class="form-control">
                                        <option disabled selected>Select State</option>
                                        @foreach($state as $pr)
                                          <option value="{{$pr->state_id}}">{{$pr->state}}</option>
                                        @endforeach                                        
                                      </select>
                                    </div>
                                     <div class="form-group col-md-12 {{ $errors->has('zone') ? ' has-error' : '' }}" >
                                      <label for="zone" class="col-form-label">Select Zone</label>                                     
                                      <select id="zone" name="zone" class="form-control">
                                        <option disabled selected>Select Zone</option>
                                        @foreach($zone as $pr)
                                          <option value="{{$pr->zone_id}}">{{$pr->zone}}</option>
                                        @endforeach                                        
                                      </select>
                                    </div>
                                    <div class="form-group col-md-12 {{ $errors->has('district-name') ? ' has-error' : '' }}">
                                         <label for="districtname">District Name</label>
                                         <input type="text" name="districtname" class="form-control" value="{{ old('districtname')}}">
                                         <small class="text-danger">{{ $errors->first('districtname') }}</small>
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
                                            <th>District Id</th>
                                            <th>District Name</th>
                                             <th>Zone</th>
                                              <th>State Name</th>
                                             <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($query as $value)
                                        <tr>
                                            <td>{{$value->district_id}}</td>
                                            <td>{{$value->district_name}}</td>
                                            <td>{{$value->zone}}</td>
                                            <td>{{$value->state}}</td>
                                            <td>{{$value->datetime_created}}</td>
                                            <td>
                                            <a href="{{url('district-master-edit-view')}}/{{$value->district_id}}">Edit</a>
                                            ||
                                            <a href="{{url('district-master-delete')}}/{{$value->district_id}}" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
 
