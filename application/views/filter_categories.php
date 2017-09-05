


<div class="sidebar-module clearfix">

    <h6 class="sidebar-title">Course Category</h6>

    <div class="sidebar-module-inner">

        <?php for($i=0;$i<5 && $i<count($categories);$i++) { ?>

            <div class="checkbox-block">
                <input id="<?php echo $categories[$i]['category_name']; ?>" name="categories" type="checkbox" class="checkbox"/>
                <label class="" for="<?php echo $categories[$i]['category_name']; ?>"><?php echo $categories[$i]['category_name']; ?></label>
            </div>

        <?php }?>

        <?php if(count($categories) > 5 ) { ?>
            <div class="more-less-wrapper">

                <div id="categories_more_less" class="collapse">
                    <div class="more-less-inner">

                        <?php for($i=5;$i<count($categories);$i++) { ?>

                            <div class="checkbox-block">
                                <input id="<?php echo $categories[$i]['category_name']; ?>" name="categories" type="checkbox" class="checkbox"/>
                                <label class="" for="<?php echo $categories[$i]['category_name']; ?>"><?php echo $categories[$i]['category_name']; ?></label>
                            </div>


                        <?php }?>





                    </div>
                </div>
                <button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#categories_more_less">Show more</button>

            </div>
        <?php }?>

    </div>

</div>
