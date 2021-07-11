<?php
    $color= strtolower(get_field('intro_color'));
  ?>    
<section class="intro">
    <?php 
    $print= get_field('about_intro');
    if($print){ ?>

        <div class="intro__content black">
            <div class="container">
                <div class="row" >
                    <div class="col-md-10 col-xl-7" >
                        <h3><?php echo $print['title']; ?></h3>
                        <p><?php echo $print['text']; ?></p> 
                    </div>
                </div>
            </div>
        </div>

        <?php
    } ?>
    <?php  $image = get_template_directory_uri().'/assets/images/waves-black.png'; ?>
    <img src="<?php echo $image;?>" class="img-full">
</section>