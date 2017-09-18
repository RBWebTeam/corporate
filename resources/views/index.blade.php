@extends('includes.master')
@section('content')
<div class="col-md-12 mrg-btm">
  <div class="col-md-3"></div>
    <div class="login col-md-6">
							      <h2>login Now</h2>
							<form action="{{url('admin-login')}}" method="post" >
							{{ csrf_field() }}
								<div class="login-inp">
									<input type="text" name="email" placeholder="Email ID"  >
									@if ($errors->has('email'))<label class="control-label" for="inputError"> 
									{{ $errors->first('email') }}</label>  @endif
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="login-inp">
									<input type="password" name="password" placeholder="Password"  >
									 @if ($errors->has('password')) <label class="control-label" for="inputError">{{ $errors->first('password') }} </label> @endif
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-group has-error">
                                @if (Session::has('msg')) <label class="control-label" for="inputError">{{ Session::get('msg') }} </label>@endif
                            </div>

								<p class="login-inp-bottom">Forgot Password?<a class="" href="#">  Click here</a></p>
								<!-- <p class="login-inp-bottom">New User?<a class="" href="#">  Register here</a></p>-->
								<div class="clear"></div>
								<div class="submit-btn">
									<input type="submit" value="Login" class="submit-btn">
								</div>
							</form>
							
	</div>	
</div>
@endsection