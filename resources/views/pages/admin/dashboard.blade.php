@extends('layout.main')

@section('content')
<div id="admin_dash">
    <div class="container-fluid">
        <h3 class="text-center"></h3>
        <div class='admin_menu'>
            <div class='admin_menu'>
                <ul class="list">
                    <li>
                        <a href="{{URL::to("/admin")}}">
                            Business list
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class='content'>

            <h3 class="text-center">Welcome Admin</h3>
            <div class='row'>


            </div>

        </div>
    </div>
</div>
@stop