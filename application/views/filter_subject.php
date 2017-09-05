


<div class="sidebar-module clearfix">

    <h6 class="sidebar-title">Course Subjects</h6>

    <div class="sidebar-module-inner">

        <?php for($i=0;$i<5 && $i<count($subjects);$i++) { ?>

            <div class="checkbox-block">
                <input id="<?php echo $subjects[$i]['subject_name']; ?>" name="subjects" type="checkbox" class="checkbox"/>
                <label class="" for="<?php echo $subjects[$i]['subject_name']; ?>"><?php echo $subjects[$i]['subject_name']; ?></label>
            </div>

        <?php }?>

        <?php if(count($subjects) > 5 ) { ?>
            <div class="more-less-wrapper">

                <div id="subjects_more_less" class="collapse">
                    <div class="more-less-inner">

                        <?php for($i=5;$i<count($subjects);$i++) { ?>

                            <div class="checkbox-block">
                                <input id="<?php echo $subjects[$i]['subject_name']; ?>" name="subjects" type="checkbox" class="checkbox"/>
                                <label class="" for="<?php echo $subjects[$i]['subject_name']; ?>"><?php echo $subjects[$i]['subject_name']; ?></label>
                            </div>


                        <?php }?>





                    </div>
                </div>
                <button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#subjects_more_less">Show more</button>

            </div>
        <?php }?>

    </div>

</div>
