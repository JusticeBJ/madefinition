<?php  $image = get_template_directory_uri().'/assets/images/Johannesburg.jpg'; ?>
<section class="team" style="background-image:url(<?php echo $image;?>)">
  
<?php 
  $print= get_field('team');
  if($print){ ?>

    <div class="team__content">
      <div class="container-fluid gutter8">
        <h1 class="heading-font"><?php echo $print['title']; ?></h1>
        <div class="paragraph"><?php echo $print['text']; ?></div>
        <?php 
          $counter= 0;
          $number_picture= 6;
          for($variable=1; $variable <= $number_picture; $variable++){
            $counter_column= ($counter % 3) + 1;
            $picture_number= $counter + 1;

            if($counter_column == 1){
              $delay= 200;
            }
            elseif($counter_column == 2){
              $delay= 600;
            }
            elseif($counter_column == 3){
              $delay= 400;
            }

            $image = $print['image_'.$picture_number];
              $imageID = $image['id'];
              if( !empty($image) ){
                  $size= 'team';
                  $image = wp_get_attachment_image_url( $imageID, $size );
              }
              else{
                  $image = get_template_directory_uri().'/assets/images/Justice.png';
              }
            ?>
            <div class="team__picture column--<?php echo $counter_column ;?> img-full">
              <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
              <div class="team__member">
                <h5><?php echo $print['name_'.$picture_number]; ?></h5>
                <div class="paragraph"><?php echo $print['description_'.$picture_number]; ?></div>
              </div>
            </div>
            <?php
            $counter++;
          }
        ?>
        <div class="row">
          <div class="col-md-4 team__column column-1"></div>
          <div class="col-md-4 team__column column-2"></div>
          <div class="col-md-4 team__column column-3"></div>
        </div>
      </div>
    </div>

    <?php
  } ?>
</section>