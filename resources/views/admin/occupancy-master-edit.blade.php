@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Occupancy Master
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

								
                                    <form role="form" method="post" action="{{url('occupancy-master-update')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-12 {{ $errors->has('section') ? ' has-error' : '' }}">
                                    <input type="hidden" name="id" value= "{{$query1->occup_id}}">
                                         <label for="section">Section</label> 
                                         <select class="form-control" name="section_id" >
                                         <option disabled selected value="0">Select Section</option>
                                          @foreach ($section as $sect)

                                          @if($sect->section_id == $query1->section_id)
                                          <option selected value="{{$sect->section_id}}"> {{$sect->section_name}}</option>
                                          @else                                         
                                          <option value="{{$sect->section_id}}"> {{$sect->section_name}}</option>
                                           @endif
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('section_id') }}</small>
                                          
                                    </div>   

                                    <div class="form-group col-md-12 {{ $errors->has('occupancy_name') ? ' has-error' : '' }}">
                                         <label for="">Occupancy Name</label>

                                         <input type="text" name="occupancy_name" class="form-control" value="{{$query1->occupancy_name}}">
                                         <small class="text-danger">{{ $errors->first('occupancy_name') }}</small>
                                    </div>                               
                                     
                                      <div class="form-group col-md-12 {{ $errors->has('building_rate') ? ' has-error' : '' }}">
                                         <label for="">Building Rate</label>
                                         <input type="text" name="building_rate" class="form-control" value="{{$query1->building_rate}}">
                                         <small class="text-danger">{{ $errors->first('building_rate') }}</small>
                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('content_rate') ? ' has-error' : '' }}">
                                         <label for="">Content Rate</label>

                                         <input type="text" name="content_rate" class="form-control" value="{{$query1->content_rate}}">
                                         <small class="text-danger">{{ $errors->first('content_rate') }}</small>
                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('stfi_rate') ? ' has-error' : '' }}">
                                         <label for="">STFI Rate</label>

                                         <input type="text" name="stfi_rate" class="form-control" value="{{$query1->stfi_rate}}">
                                         <small class="text-danger">{{ $errors->first('stfi_rate') }}</small>
                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('stfi_open_rate') ? ' has-error' : '' }}">
                                         <label for="">STFI Open Rate</label>

                                         <input type="text" name="stfi_open_rate" class="form-control" value="{{$query1->stfi_open_rate}}">
                                         <small class="text-danger">{{ $errors->first('stfi_open_rate') }}</small>
                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('eq_rate') ? ' has-error' : '' }}">
                                         <label for="">Earthquake Rate</label>

                                         <input type="text" name="eq_rate" class="form-control" value="{{$query1->eq_rate}}">
                                         <small class="text-danger">{{ $errors->first('eq_rate') }}</small>
                                    </div>
                                    
                                    <div class="form-group col-md-12 {{ $errors->has('terrorism_rate') ? ' has-error' : '' }}">
                                         <label for="">Terrorism Rate</label>

                                         <input type="text" name="terrorism_rate" class="form-control" value="{{$query1->terrorism_rate}}">
                                         <small class="text-danger">{{ $errors->first('terrorism_rate') }}</small>
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
 