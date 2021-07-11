<section class="intro">
    <?php 
    $print= get_field('home_intro');
    if($print){ ?>

        <div class="intro__content black" >
            <div class="container-fluid  gutter8">
                <div class="row" >
                    <div class="col-md-10 col-xl-7">
                        <h3><?php echo $print['title']; ?></h3>
                        <p><?php echo $print['text']; ?></p> 
                    </div>
                </div>
            </div>
        </div>
        <?php  $image = get_template_directory_uri().'/assets/images/waves-black.png'; ?>
        <img src="<?php echo $image;?>" class="img-full bg-wave">
        <?php
    } ?>
    
</section>