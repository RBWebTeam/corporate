 
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

                                     <div class="form-group{{ $errors->has('empcode') ? ' has-error' : '' }}">
                                         <label for="empcode">Empcode ID</label>
                                         <input type="text" name="empcode" class="form-control" value="{{ old('empcode')}}">
                                         <small class="text-danger">{{ $errors->first('empcode') }}</small>
                                    </div>

                                     <div class="form-group{{ $errors->has('reporting_emp') ? ' has-error' : '' }}">
                                         <label for="reporting_emp">Reporting Empcode ID</label>
                                         <input type="text" name="reporting_emp" class="form-control" value="{{ old('reporting_emp')}}">
                                         <small class="text-danger">{{ $errors->first('reporting_emp') }}</small>
                                    </div>

                                    

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                         <label for="password">Password</label>
                                         <input type="password" name="password" class="form-control" value="{{ old('password')}}">
                                         <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                         <label for="confirm_password">Confirm password</label>
                                         <input type="password" name="confirm_password" class="form-control" value="{{ old('confirm_password')}}">
                                         <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
                                    </div>

                                      <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                                            <label>User Type</label>
                                            <select class="form-control" name="user_type_id">
                                              <option value="" disabled selected>select user type</option>
                                                @foreach($user_type_master as $typeval)
                                                <option value="{{$typeval->user_type_id}}">{{$typeval->user_type_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('user_type_id') }}</small>
                                     </div>

                                     <div class="form-group{{ $errors->has('vertical_id') ? ' has-error' : '' }}">
                                            <label>Vertical</label>
                                            <select class="form-control" name="vertical_id">
                                              <option value="" disabled selected>select Vertical</option>
                                               @foreach($vertical_master as $virtical)
                                                <option value="{{$virtical->vertical_id}}">{{$virtical->vertical_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('vertical_id') }}</small>
                                     </div>

                                      <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                                            <label>Branch Name</label>
                                            <select class="form-control" name="branch_id">
                                              <option value="" disabled selected>select Vertical</option>
                                               @foreach($branch_master as $barnch)
                                                <option value="{{$barnch->branch_id}}">{{$barnch->branch_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('branch_id') }}</small>
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
   
 