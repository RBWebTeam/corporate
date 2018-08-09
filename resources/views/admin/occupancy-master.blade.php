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
								
                                    <form role="form" method="post" action="{{url('occupancy-master-save')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-12 {{ $errors->has('section') ? ' has-error' : '' }}">
                                         <label for="section">Section</label> 
                                         <select class="form-control" name="section_id" >
                                         <option selected value="0">Select Section</option>
                                          @foreach ($section as $sect)
                                          <option value="{{$sect->section_id}}"> {{$sect->section_name}}</option>
                                         @endforeach 
                                         </select>
                                          <small class="text-danger">{{ $errors->first('section_id') }}</small>

                                    </div>

                                      <div class="form-group col-md-12 {{ $errors->has('occupancy_name') ? ' has-error' : '' }}">
                                         <label for="occupancy_name">Occupancy Name</label>
                                         <input type="text" name="occupancy_name" class="form-control">
                                         <small class="text-danger">{{ $errors->first('occupancy_name') }}</small>
                                    </div>
                                    
                                      <div class="form-group col-md-12 {{ $errors->has('building_rate') ? ' has-error' : '' }}">
                                         <label for="building_rate">Building Rate</label>
                                         <input type="text" name="building_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('building_rate') }}</small>
                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('content_rate') ? ' has-error' : '' }}">
                                         <label for="content_rate">Content Rate</label>
                                         <input type="text" name="content_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('content_rate') }}</small>
                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('stfi_rate') ? ' has-error' : '' }}">
                                         <label for="stfi_rate">STFI Rate</label>
                                         <input type="text" name="stfi_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('stfi_rate') }}</small>
                                    </div>

                                     <div class="form-group col-md-12 {{ $errors->has('stfi_open_rate') ? ' has-error' : '' }}">
                                         <label for="stfi_open_rate">STFI Open Rate</label>
                                         <input type="text" name="stfi_open_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('stfi_open_rate') }}</small>
                                    </div>

                                    <div class="form-group col-md-12 {{ $errors->has('eq_rate') ? ' has-error' : '' }}">
                                         <label for="eq_rate">Earthquake Rate</label>
                                         <input type="text" name="eq_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('eq_rate') }}</small>
                                    </div>
                                  
                                  <div class="form-group col-md-12 {{ $errors->has('terrorism_rate') ? ' has-error' : '' }}">
                                         <label for="terrorism_rate">Terrorism Rate</label>
                                         <input type="text" name="terrorism_rate" class="form-control">
                                         <small class="text-danger">{{ $errors->first('terrorism_rate') }}</small>
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
          View Occupancy Master
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body table-responsive">
          
      
               <table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12 " id="dataTables-example" style="font-size: 12px;" >
              <!-- id="dataTables-example" -->


              <thead>
                <tr  style="background-color: #0099CC; color:white;" >
                  <th>Id</th>
                  <th>Occupancy Name</th>
                  <th>Section</th>
                  <th>Building Rate</th>
                  <th>Content Rate</th>
                  <th>STFI Rate</th>
                  <th>STFI Open Rate</th>
                   <th>Earthquake Rate</th>
                   <th>Terrorism Rate</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($query as $value)
                      <tr>
                      <td>{{$value->occup_id}}</td>
                      <td>{{$value->occupancy_name}}</td>
                      <td>{{$value->section_name}}</td>
                      <td>{{$value->building_rate}}</td>
                      <td>{{$value->content_rate}}</td>
                      <td>{{$value->stfi_rate}}</td>
                      <td>{{$value->stfi_open_rate}}</td>
                      <td>{{$value->eq_rate}}</td>
                      <td>{{$value->terrorism_rate}}</td>
                     <td>
                       <a href="{{url('occupancy-master-edit-view')}}/{{$value->occup_id}}">Edit</a> ||
                        <a href="{{url('occupancy-master-delete')}}/{{$value->occup_id}}" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                      </tr>
                @endforeach 
            </tbody>
          </table>
         

      </div>

    </div>
          
</div>

        @endsection
 