@extends('layout.main')

@section('content')
<div id="admin_dash">
    <div class="container-fluid">
        <h3 class="text-center"></h3>
        @include('includes.admin-menu')
        <div class='content'>
            <h3 class="text-center">Welcome Admin</h3>
            <div class="tab-container" data-format="TAB">
                <ul class="tabs">
                    <li class="tab active" data-index="1">
                        Add category
                    </li>
                    <li class="tab" data-index="2">
                        View category
                    </li>
                </ul>
                <div class="tab-data">
                    <div class="data active" data-index="1">
                        <form action="{{}}" method="post">
                                
                        </form>
                    </div>
                    <div class="data" data-index="2">
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@stop