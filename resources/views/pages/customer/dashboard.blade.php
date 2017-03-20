@extends('layout.main')

@section('content')
<div id="dashboard" class="clearfix">
    <div class="container">
        <h3 class="text-center">Welcome</h3>
        @if(Session::has('login_error'))
        <div calss='row'>
            <div class='col-md-12'>
                <div class='alert alert-danger'>
                    {{ Session::get('login_error') }}
                </div>
            </div>
        </div>
        @endif
        <!--for customer--> 
        <div class='text-center'>
            <h5>Want to list your business?</h5>
            <a class="btn btn-success" href='{{URL::to("/")}}'>
                Click here
            </a>
        </div>
        <!--end-->
    </div>
</div>
@stop