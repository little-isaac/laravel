@extends('layout.main')

@section('content')
<!--customerSignup.blade-->
<div id="customer_signup">
    <div class="container">
        <h3 class="text-center">Customer Register</h3>
        @if(Session::has('success'))
        <div class='row'>
            <div class='col-md-6'>
                <div class='fancy_alert'>
                    <span>{{ Session::get('success') }}</span>
                    <a href="">
                        Click here for login
                    </a>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
        <div class="page_form">
            <form action='{{ URL::to('/customer-register') }}' method='post'>
                <div class="row">
                    <div class="col-sm-12">
                        <input type='hidden' value='{{ csrf_token() }}' name='_token'/>
                        <div class="form-group @if($errors->has('first_name')) has-error has-feedback  @endif">
                            <label> First Name:
                                @if($errors->has('first_name'))<span class="error">{{ $errors->first('first_name') }}</span>@endif
                            </label>
                            <input type="text" class="form-control" required placeholder="Enter First Name" name='first_name'/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group @if($errors->has('last_name')) has-error has-feedback  @endif">
                            <label>Last name:  
                                @if($errors->has('last_name'))<span class="error">{{ $errors->first('last_name') }}</span>@endif
                            </label>
                            <input  required type="text" class="form-control" placeholder="Enter Last Name"  name='last_name'>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group @if($errors->has('email')) has-error has-feedback  @endif">
                            <label>
                                @if($errors->has('email'))<span class="error">{{ $errors->first('email') }}</span>@endif
                                Email:
                            </label>
                            <input required type="email" class="form-control"  name='email'  placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group @if($errors->has('password')) has-error has-feedback  @endif">
                            <label class="password_label">Password <span class="error hide">Password does not match.</span>
                                @if($errors->has('password'))<span class="error">{{ $errors->first('password') }}</span>@endif
                            </label>
                            <input required type="password" class="form-control password" placeholder="Enter Password" name='password'/>
                        </div>
                    </div>
                      <div class="col-sm-12">
            <div class="form-group @if($errors->has('confirm_password')) has-error has-feedback  @endif">
              <label>Confirm Password
                @if($errors->has('confirm_password'))<span class="error">{{ $errors->first('confirm_password') }}</span>@endif
              </label>
              <input  required type="password" class="confirm_password form-control" placeholder="Re-enter Password" name='confirm_password'/>
            </div>
          </div>
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form> 
        </div>
            </div>
    </div>
    </div>
</div>
@stop