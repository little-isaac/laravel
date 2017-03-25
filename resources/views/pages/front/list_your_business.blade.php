@extends('layout.main')

@section('content')
<div id="business_list">
    <div class="container">
        <h3 class="text-center">Grow your business with us!</h3>
        @if(Session::has('success'))
        <div class='row'>
            <div class='col-md-6'>
                <div class='fancy_alert'>
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif
        <div class="steps">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <ul class="list table_view_xs">
                        <li class="step col-xs-4">
                            <span class="circle"></span>
                            <p>Category Selection</p>
                            <span class="line"></span>
                        </li>
                        <li class="step col-xs-4">
                            <span class="circle"></span>
                            <p>Business info</p>
                            <span class="line"></span>
                        </li>
                        
                        <li class="step col-xs-4">
                            <span class="circle"></span>
                            <p>Bank details</p>
                        </li>
                    </ul>        
                </div>
            </div>
        </div>
        <div class='section active' data-item="1">
        @include('includes.business-category')
        <div class='buttons'>
            <a class='btn btn-success next disabled' data-type="next" data-step="1" data-target="2">
                Next
            </a>
        </div>
        </div>
        <div class='section' data-item="2">
        @include('includes.list-business-form')
        <div class='buttons'>
            <a class='btn btn-success' data-type="prev" data-step="1" data-target="1">
                Prev
            </a>
            <a class='btn btn-success next disabled' data-type="next" data-target="2">
                Next
            </a>
        </div>
        </div>
    </div>
</div>
</div>
@stop