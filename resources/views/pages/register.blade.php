@extends('layout.main')

@section('content')
<div class="container">
    <h2>Vertical (basic) form</h2>
    @if(Session::has('success'))
    <div class='row'>
        <div class='col-md-12'>
            <div class='alert alert-success'>
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    <form action='{{ URL::to('/register') }}' method='post'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'/>
        <div class="form-group @if($errors->has('name')) has-error has-feedback  @endif">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="Name" name='name' placeholder="Enter name"/>
            @if($errors->has('name'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('name') }}</p>@endif
        </div>
        <div class="form-group @if($errors->has('email')) has-error has-feedback  @endif">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name='email' placeholder="Enter email">
            @if($errors->has('email'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('email') }}</p>@endif
        </div>
        <div class="form-group @if($errors->has('password')) has-error has-feedback  @endif">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name='password' placeholder="Enter password">
            @if($errors->has('password'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('password') }}</p>@endif
        </div>
        <div class="form-group @if($errors->has('confirm_password')) has-error has-feedback  @endif">
            <label for="conf_pwd">Confirm Password:</label>
            <input type="password" class="form-control" id="conf_pwd" name='confirm_password' placeholder="Confirm password">
            @if($errors->has('confirm_password'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('confirm_password') }}</p>@endif
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@stop