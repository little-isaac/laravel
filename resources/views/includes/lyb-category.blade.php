<div class="business_category">
    <h6 class='title'>Select a category *</h6>
    <form class="child_form" data-item="1">
        <ul class="list row">
            <?php
            foreach ($category as $x => $x_value) {
                ?>
                <li class="col-xs-6 col-sm-4">
                    <div class="image">
                        <div class="img">
                            <input type="radio" id="cate_<?php echo $x_value['id'] ?>" name="category" value="<?php echo $x_value['id'] ?>">
                            <a>
                                <img alt="business-category" src="./images/category/<?php echo $x_value['id'] ?>/600.jpg" class='img-responsive'>
                                <div class="text">
                                    <h5 class="name">
                                       
                                            <?php echo $x_value['name'] ?>
                                        </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>    
        <div class='buttons text-right'>
            <button class='btn btn-success disabled' type="submit" disabled data-type="next" data-step="1" data-target="2">
                Next
            </button>
        </div>
    </form>

</div>
<?php
//    print_r($category);
//foreach($category as $x => $x_value) {
//    echo "Key=" . $x . ", Value=" . $x_value['image'];
//   $images = $x_value['image'];
//   $images = (json_decode($images));
//   print_r($images);
// 
//}
?>