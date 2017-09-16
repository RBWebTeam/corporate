 
 @extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registration
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 " style="float: none;margin: 0 auto;">
                                    <form role="form" method="post" action="registration-form" >
                                      {{ csrf_field() }} 
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                         <label for="firstname">First Name</label>
                                         <input type="text" name="firstname" class="form-control" value="{{ old('firstname')}}">
                                         <small class="text-danger">{{ $errors->first('firstname') }}</small>
                                    </div>   
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                         <label for="lastname">Last Name</label>
                                         <input type="text" name="lastname" class="form-control" value="{{ old('lastname')}}">
                                         <small class="text-danger">{{ $errors->first('lastname') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                         <label for="email">Email ID</label>
                                         <input type="text" name="email" class="form-control" value="{{ old('email')}}">
                                         <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>
                                     <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                         <label for="mobile">Mobile</label>
                                         <input type="text" name="mobile" class="form-control" value="{{ old('mobile')}}">
                                         <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                         <label for="password">Password</label>
                                         <input type="text" name="password" class="form-control" value="{{ old('password')}}">
                                         <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                         <label for="confirm_password">Confirm password</label>
                                         <input type="text" name="confirm_password" class="form-control" value="{{ old('confirm_password')}}">
                                         <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
                                    </div>

                                        <button type="submit" class="btn btn-default">save  </button>
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                        
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
   
 