@extends('layout.main')

@section('content')
<div class="container">
    @if(Session::has('login_success'))
    <div calss='row'>
        <div class='col-md-12'>
            <div class='alert alert-success'>
                {{ Session::get('login_success') }}
            </div>
        </div>
    </div>
    @endif
    @if(Auth::guard('admin')->check())
    <div calss='row'>
        <div class='col-md-12'>
            <div class='alert alert-success'>
                {{ Auth::guard('admin')->user()->name }}
            </div>
        </div>
    </div>
    @endif
    <h3>Right Aligned Navbar</h3>
    <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>
@stop