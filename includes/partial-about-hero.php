<section class="about-hero">
  
<div class="about-hero__content">
<?php 
  $print= get_field('about_hero');
  if($print){ ?>
    <div class="container-fluid  gutter8">
      <div class="row">
          <div class="col-md-4">
            <div class="about-hero__image img-full" data-aos="zoom-in-up" data-aos-delay="0" data-aos-duration="1500">
                <?php
                $image = $print['image'];
                $imageID = $image['id'];
                if( !empty($image) ){
                    $size= 'about-hero';
                    $image = wp_get_attachment_image_url( $imageID, $size );
                }
                else{
                    $image = get_template_directory_uri().'/assets/images/about-hero1.png';
                }
                ?>
                <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
            </div>
          </div>
        
          <div class="col-md-8">
            <div class="about-hero__text">
              <h3><?php echo $print['title']; ?></h3>
              <div class="paragraph"><?php echo $print['text']; ?></div> 
            </div>
          </div>
        </div>
      </div>



    </div>
    <?php
  } ?>
  <?php  $image = get_template_directory_uri().'/assets/images/waves-black.png'; ?>
  <img src="<?php echo $image;?>" class="img-full bg-wave">
</section>