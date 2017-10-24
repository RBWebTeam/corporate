@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Update Vertical Master
                        </div>
                    
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-12">
								
                                    <form role="form" method="post" action="{{url('vertical-master-update')}}" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-6 {{ $errors->has('vertical-name') ? ' has-error' : '' }}">
                                         <label for="verticalname">Vertical Name</label>
                                         <input type="text" name="verticalname" class="form-control" value="{{$query1->vertical_name}}">
                                         <small class="text-danger">{{ $errors->first('verticalname') }}</small>

                                    </div>  
                                    <input type="hidden" name="verticalid" value= "{{$query1->vertical_id}}">
                                     
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
 