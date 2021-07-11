<section class="profile">
  <?php  $image = get_template_directory_uri().'/assets/images/waves-yellow1.png'; ?>
  <img src="<?php echo $image;?>" class="img-full">
<?php 
  $print= get_field('profile');
  if($print){ ?>

    <div class="profile__content">
      <div class="container">
        <h1 class="heading-font"><?php echo $print['title']; ?></h1>
        <div class="row">
          <div class="col-md-5">
            <div class="profile__picture img-full" data-aos="flip-right" data-aos-delay="200" data-aos-duration="500">
              <?php
              $image = $print['image'];
              if( !empty($image) ){
                  $image = esc_url($image['url']); 
              }
              else{
                  $image = get_template_directory_uri().'/assets/images/Jus.png';
              }
              ?>
              <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
            </div>
          </div>
          <div class="col-md-7">
            <div class="paragraph"><?php echo $print['text']; ?></div>
          </div>
        </div>
      </div>
    </div>

    <?php
  } ?>
    <?php  $image = get_template_directory_uri().'/assets/images/waves-yellow.png'; ?>
    <img src="<?php echo $image;?>" class="img-full">
</section>