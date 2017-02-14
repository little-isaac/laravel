@extends('layout.main')

@section('content')
<div class="container">
    <h2>Vertical (basic) form</h2>
    @if(Session::has('login_error'))
    <div calss='row'>
        <div class='col-md-12'>
            <div class='alert alert-danger'>
                {{ Session::get('login_error') }}
            </div>
        </div>
    </div>
    @endif
    
    <form action='{{ URL::to('/login') }}' method='post'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'/>
        <div class="form-group @if($errors->has('email')) has-error has-feedback  @endif">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name='email' placeholder="Enter email">
            @if($errors->has('email'))<span class="glyphicon glyphicon-remove form-control-feedback"></span><p class="form-control-static">{{ $errors->first('email') }}</p>@endif
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@stop