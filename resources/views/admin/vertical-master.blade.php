@extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vertical Master
                        </div>
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-12">
								
                                    <form role="form" method="post" action="verticalmasterform" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-6 {{ $errors->has('vertical-name') ? ' has-error' : '' }}">
                                         <label for="verticalname">Vertical Name</label>
                                         <input type="text" name="verticalname" class="form-control" value="{{ old('verticalname')}}">
                                         <small class="text-danger">{{ $errors->first('verticalname') }}</small>
                                    </div>   
                                    
                                     <div class="col-md-12"> <button type="submit" class="btn btn-success">SAVE </button></div>
                                      
                                        
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
   