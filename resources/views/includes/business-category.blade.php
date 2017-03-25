<div class="business_category">
    <h6 class='title'>Select a category *</h6>
    <ul class="list row">
        <?php
        foreach ($category as $cate) {
            if ($cate['isEnabled']) {
                $image = "images/category/".$cate['id']."/".$cate['image']['300'];
                ?>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="image">
                        <div class="img">
                            <a>
                                <img alt="<?php echo $cate['name']; ?>" src="{{ URL::asset($image) }}" class='img-responsive'>
                                <div class="text">
                                    <h5 class="name"><?php echo $cate['name']; ?></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <?php
            }
        }
        ?>

    </ul>
</div>