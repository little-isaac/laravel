<nav class="main_nav"> 
    <div class="container">
    <div class="menu_wrapper">
        <div class="table_view">
            <div class="col-sm-9">
                <div class="menu">
                    <ul class="main_ul">
<!--                        <li>
                            <a href="{{URL::to('/')}}">
                                HOME
                            </a>
                        </li>-->
                        <li>
                            <a href="{{URL::to('/list-your-business')}}">
                                List Your Business
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="brand_name">
                    <a href="{{URL::to('/')}}"><?php echo env('APP_NAME') ?></a>
                </div>        
            </div>
        </div>
    </div>

    </div>
</nav>