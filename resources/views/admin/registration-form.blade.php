 
 @extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
         
     <div class="row">
                <div class="col-lg-6 mrg-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registration
                        </div>
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-12">
								
                                    <form role="form" method="post" action="registration-form" >
                                      {{ csrf_field() }} 
                                    <div class="form-group col-md-6 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                         <label for="firstname">First Name</label>
                                         <input type="text" name="firstname" class="form-control" value="{{ old('firstname')}}">
                                         <small class="text-danger">{{ $errors->first('firstname') }}</small>
                                    </div>   
                                    <div class="form-group col-md-6 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                         <label for="lastname">Last Name</label>
                                         <input type="text" name="lastname" class="form-control" value="{{ old('lastname')}}">
                                         <small class="text-danger">{{ $errors->first('lastname') }}</small>
                                    </div>
                                    <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                         <label for="email">Email ID</label>
                                         <input type="text" name="email" class="form-control" value="{{ old('email')}}">
                                         <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>
                                     <div class="form-group col-md-6 {{ $errors->has('mobile') ? ' has-error' : '' }}">
                                         <label for="mobile">Mobile</label>
                                         <input type="text" name="mobile" class="form-control" value="{{ old('mobile')}}">
                                         <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                    </div>

                                     <div class="form-group col-md-6 {{ $errors->has('empcode') ? ' has-error' : '' }}">
                                         <label for="empcode">Empcode ID</label>
                                         <input type="text" name="empcode" class="form-control" value="{{ old('empcode')}}">
                                         <small class="text-danger">{{ $errors->first('empcode') }}</small>
                                    </div>

                                     <div class="form-group col-md-6 {{ $errors->has('reporting_emp') ? ' has-error' : '' }}">
                                         <label for="reporting_emp">Reporting Employee</label> 
                                         <select class="form-control" name="reporting_emp" >
                                         <option selected>Select Employee</option>
                                          @foreach ($userempcode as $user)
                                          <option value="{{$user->empcode}}"> {{$user->empname}}</option>
                                         @endforeach 
                                         </select>

                                    </div>

                                    

                                    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                         <label for="password">Password</label>
                                         <input type="password" name="password" class="form-control" value="{{ old('password')}}">
                                         <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>
                                    <div class="form-group col-md-6 {{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                         <label for="confirm_password">Confirm password</label>
                                         <input type="password" name="confirm_password" class="form-control" value="{{ old('confirm_password')}}">
                                         <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
                                    </div>

                                      <div class="form-group col-md-6 {{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                                            <label>User Type</label>
                                            <select class="form-control" name="user_type_id">
                                              <option value="" disabled selected>select user type</option>
                                                @foreach($user_type_master as $typeval)
                                                <option value="{{$typeval->user_type_id}}">{{$typeval->user_type_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('user_type_id') }}</small>
                                     </div>

                                     <div class="form-group col-md-6 {{ $errors->has('vertical_id') ? ' has-error' : '' }}">
                                            <label>Vertical</label>
                                            <select class="form-control" name="vertical_id">
                                              <option value="" disabled selected>select Vertical</option>
                                               @foreach($vertical_master as $virtical)
                                                <option value="{{$virtical->vertical_id}}">{{$virtical->vertical_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('vertical_id') }}</small>
                                     </div>

                                      <div class="form-group col-md-6{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                                            <label>Branch Name</label>
                                            <select class="form-control" name="branch_id">
                                              <option value="" disabled selected>select Vertical</option>
                                               @foreach($branch_master as $barnch)
                                                <option value="{{$barnch->branch_id}}">{{$barnch->branch_name}}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('branch_id') }}</small>
                                     </div>

                                   


                                    

                                     <div class="col-md-12">   <button type="submit" class="btn btn-success">SAVE </button></div>
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
             
    <div class="panel panel-default">
        <div class="panel-heading">
          DataTables Advanced Tables
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body table-responsive">
          
      
            <table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12 " id="dataTables-example" style="font-size: 12px;" >
              <!-- id="dataTables-example" -->


              <thead>
                <tr  style="background-color: #0099CC; color:white;" >
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email ID</th>
                  <th>Mobile</th>
                  <th>Empcode ID</th>
                  <th>Reporting Empcode ID</th>
                  <th>User Type</th>
                  <th>Vertical</th>
                  <th>Branch Name</th>
                  <th>Action</th>
                </tr>
                </thead>
               @foreach($details_show as $val)
                <tr>
                 <td>{{$val->firstname}}</td>
                   <td>{{$val->lastname}}</td>
                  <td>{{$val->email}}</td>
                    <td>{{$val->mobile}}</td>
                     <td>{{$val->empcode}}</td>
                      <td>{{$val->reporting_emp}}</td>
                       <td>{{$val->user_type_name}}</td>
                        <td>{{$val->vertical_name}}</td>
                         <td>{{$val->branch_name}}</td>
                         <td><a href="{{url('dashboard/registration-edit')}}/{{$val->userid}}">Edit</a>||<a href="{{url('dashboard/registration-delete')}}/{{$val->userid}}">Delete</a></td>

                    

                </tr>
               @endforeach

             
              <tbody>
              
            </tbody>
          </table>
         

      </div>

    </div>
          
</div>

        @endsection
   
 