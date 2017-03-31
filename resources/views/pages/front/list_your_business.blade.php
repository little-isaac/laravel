@extends('layout.main')

@section('content')
<div id="business_list">
    <div class="container">
        <h3 class="text-center">Grow your business with us!</h3>
        @if(Session::has('success'))
        <div class='row'>
            <div class='col-md-6'>
                <div class='fancy_alert form_filled'>
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif
        <div class="steps">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <ul class="list table_view_xs">
                        <li class="step col-xs-3">
                            <span class="circle"></span>
                            <p>Category Selection</p>
                            <span class="line"></span>
                        </li>
                        <li class="step col-xs-3">
                            <span class="circle"></span>
                            <p>Business info</p>
                            <span class="line"></span>
                        </li>
                        
                        <li class="step col-xs-3">
                            <span class="circle"></span>
                            <p>Bank details</p>
                             <span class="line"></span>
                        </li>
                        <li class="step col-xs-3">
                            <span class="circle"></span>
                            <p>Personal Detail</p>
                        </li>
                        
                    </ul>        
                </div>
            </div>
        </div>
        <div class='section active' data-item="1">
        @include('includes.lyb-category')
        </div>
        <div class='section' data-item="2">
        @include('includes.lyb-business-info')
        </div>
         <div class='section' data-item="3">
        @include('includes.lyb-bank')
        </div>
         <div class='section' data-item="4">
        @include('includes.lyb-personal')
        </div>
    </div>
    <div class="master_form hide">
        <form action='{{ URL::to('/list-your-business') }}' method='post'>
            
        </form>
    </div>
</div>
</div>
@stop