<?php
$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$menu_array = array(
    array(
        "display" => "Home",
        "icon" => "",
        "url" => ""
    )
   
);
$menu_array2 = array(
    array(
        "display" => "Login",
        "icon" => "",
        "url" => ""
    ),
    array(
        "display" => "Sign up",
        "icon" => "",
        "url" => "/list-your-business"
    ),
    array(
        "display" => "List Your Business",
        "icon" => "",
        "url" => "/list-your-business"
    )
);
?>
<nav class="main_nav"> 
    <div class="container">
        <div class="menu_wrapper">
            <div class="table_view">
                <div class="col-sm-4">
                    <div class="menu">
                        <ul class="main_ul">
                            <?php
                            for ($i = 0; $i < count($menu_array); $i++) {
                                $display = $menu_array[$i]['display'];
                                $icon = $menu_array[$i]['icon'];
                                $url = $menu_array[$i]['url'];
                                $menu = null;
                                if (isset($menu_array[$i]['menu'])) {
                                    $menu = $menu_array[$i]['menu'];
                                }
                                $li_class = "";
                                if ($page == $url) {
                                    $li_class .= " active";
                                }
                                ?>
                                <li class="<?php echo $li_class; ?>"><a href="./<?php echo $url ?>">
                                        <?php echo $icon . $display ?></a>
                                        <?php if ($menu) { ?>
                                        <ul class="drop_down_hover">
                                            <?php
                                            for ($i = 0; $i < count($menu); $i++) {
                                                $display = $menu[$i]['display'];
                                                $icon = $menu[$i]['icon'];
                                                $url = $menu[$i]['url'];
                                                $li_class = "";
                                                if ($page == $url) {
                                                    $li_class .= " active";
                                                }
                                                ?>
                                                <li class="<?php echo $li_class; ?>"> <a href="<?php echo $url ?>"><?php echo $display; ?></a></li>
                                                <?php
                                            }
                                            ?> 
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="brand_name">
                        <a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}"></a>
                    </div>        
                </div>
                <div class="col-sm-4">
                    <div class="menu">
                        <ul class="main_ul text-right">
                            <?php
                            for ($i = 0; $i < count($menu_array2); $i++) {
                                $display = $menu_array2[$i]['display'];
                                $icon = $menu_array2[$i]['icon'];
                                $url = $menu_array2[$i]['url'];
                                $menu = null;
                                if (isset($menu_array2[$i]['menu'])) {
                                    $menu = $menu_array2[$i]['menu'];
                                }
                                $li_class = "";
                                if ($page == $url) {
                                    $li_class .= " active";
                                }
                                ?>
                                <li class="<?php echo $li_class; ?>"><a href="./<?php echo $url ?>">
                                        <?php echo $icon . $display ?></a>
                                        <?php if ($menu) { ?>
                                        <ul class="drop_down_hover">
                                            <?php
                                            for ($i = 0; $i < count($menu); $i++) {
                                                $display = $menu[$i]['display'];
                                                $icon = $menu[$i]['icon'];
                                                $url = $menu[$i]['url'];
                                                $li_class = "";
                                                if ($page == $url) {
                                                    $li_class .= " active";
                                                }
                                                ?>
                                                <li class="<?php echo $li_class; ?>"> <a href="<?php echo $url ?>"><?php echo $display; ?></a></li>
                                                <?php
                                            }
                                            ?> 
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
