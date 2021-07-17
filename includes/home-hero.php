
<section class="home-hero">
  <?php 
  $print= get_field('home_hero');
  if($print){ ?>
    <div class="container-fluid home-hero__frame">

    
          <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
              $number_pictures= 4;
              $counter;
              for($counter=1; $counter<=$number_pictures; $counter++){

                $image = $print['image_'.$counter];
                $imageID = $image['id'];
                if( !empty($image) ){
                    $size= 'home-hero';
                    $image = wp_get_attachment_image_url( $imageID, $size );
                }
                else{
                  $image = get_template_directory_uri().'/assets/images/hero.png';
                }
                ?>
                <div class="swiper-slide home-hero__img" class="hide-md" style="background-image:url(<?php echo $image;?>)">
                </div>

                <?php
              }
              ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
          </div>

      
    </div>
    
    <?php
  } ?>
</section>

