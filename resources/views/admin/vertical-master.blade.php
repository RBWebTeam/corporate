@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vertical Master
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
								
                                    <form role="form" method="post" action="{{url('vertical-master-save')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-6 {{ $errors->has('vertical-name') ? ' has-error' : '' }}">
                                         <label for="verticalname">Vertical Name</label>
                                         <input type="text" name="verticalname" class="form-control" value="{{ old('verticalname')}}">
                                         <small class="text-danger">{{ $errors->first('verticalname') }}</small>
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
                <div class="col-lg-6">
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
                                            <th>Vertical Id</th>
                                            <th>Vertical Name</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($query as $value)
                                        <tr>
                                            <td>{{$value->vertical_id}}</td>
                                            <td>{{$value->vertical_name}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>
                                            <a href="{{url('vertical-master-edit-view')}}/{{$value->vertical_id}}">Edit</a>
                                            ||
                                            <a href="{{url('vertical-master-delete')}}/{{$value->vertical_id}}" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Vertical Master</h4>
        </div>
        <div class="modal-body">
         <form role="form" method="post" id="updatevertical"  >
                                      {{ csrf_field() }} 
                                    <input type="hidden" name="vid" id="vid">
                                    <div  {{ $errors->has('vertical-name') ? ' has-error' : '' }}">
                                         <label for="vname">Vertical Name</label>
                                         <input type="text" name="vname" id="vname" class="form-control" value="{{ old('vname')}}">
                                         <small class="text-danger">{{ $errors->first('vname') }}</small>
                                    </div>   
                                    <br>
                                     <div class="col-md-12"> <button id="btnEdit" type="submit" class="btn btn-success btnEdit">Edit</button></div>
                                      <br>
                                        
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


             
          
</div>

        @endsection
 