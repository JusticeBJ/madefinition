<?php
    $color= strtolower(get_field('page_color'));
  ?>    
<section class="intro">
    <?php 
    $print= get_field('intro');
    if($print){ ?>

        <div class="intro__content <?php echo $color ?>">
            <div class="container-fluid gutter8">
                <div class="row" >
                    <div class="col-md-10 col-xl-7" >
                        <h3><?php echo $print['title']; ?></h3>
                        <p><?php echo $print['text']; ?></p> 
                    </div>
                </div>
            </div>
        </div>

        <?php
    } 
    if($color=='green'){
        $image = get_template_directory_uri().'/assets/images/waves-green1.png';
    }
    elseif($color=='pink'){
        $image = get_template_directory_uri().'/assets/images/waves-pink1.png';
    }
    else{
        $image = get_template_directory_uri().'/assets/images/waves-blue1.png';
    }
    ?>
    <img src="<?php echo $image;?>" class="img-full">
</section>