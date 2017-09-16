@include('admin.includes.head')
 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('admin-login')}}">
                        {{ csrf_field() }}
                            <fieldset>
                             
                                <div class="form-group has-error">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                       @if ($errors->has('email'))<label class="control-label" for="inputError"> {{ $errors->first('email') }}</label>  @endif
                                </div>
                                <div class="form-group has-error">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                      @if ($errors->has('password')) <label class="control-label" for="inputError">{{ $errors->first('password') }} </label> @endif
                                </div>
                            <div class="form-group has-error">
                                @if (Session::has('msg')) <label class="control-label" for="inputError">{{ Session::get('msg') }} </label>@endif
                            </div>
                            
                              <!--   <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
 