@extends('layout.main')

@section('content')
<div id="admin_login">
    <div class="container">
        <h3 class="text-center">Admin Login</h3>
        @if(Session::has('login_error'))
        <div calss='row'>
            <div class='col-md-12'>
                <div class='alert alert-danger'>
                    {{ Session::get('login_error') }}
                </div>
            </div>
        </div>
        @endif
        <div class='row'>
            <div class='col-sm-6 col-sm-offset-3'>
                <form action='{{ URL::to('/login') }}' method='post'>
                    <input type='hidden' value='{{ csrf_token() }}' name='_token'/>
                    <div class="form-group @if($errors->has('email')) has-error has-feedback  @endif">
                        <label for="email">Email:
                            @if($errors->has('email'))<span class="error">{{ $errors->first('email') }}</span>@endif
                        </label>
                        <input type="email" class="form-control"  name='email' placeholder="Enter email">
                    </div>
                    <div class="form-group @if($errors->has('password')) has-error has-feedback  @endif">
                        <label for="email">Password:
                            @if($errors->has('password'))<span class="error">{{ $errors->first('password') }}</span>@endif
                        </label>
                        <input type="password" class="form-control"  name='password' placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>        
            </div>
        </div>
    </div>
</div>
@stop