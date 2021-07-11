<?php
  $color= strtolower(get_field('page_color'));
?> 
<section class="hero  <?php echo $color; ?>">
<?php 
  $print= get_field('hero');
  if($print){ ?>
    <div class="container-fluid gutter8">
      <div class="hero__image">
        <?php
        $image = $print['image'];
        if( !empty($image) ){
            $imageID = $image['id'];
            $size= 'hero';
            $image = wp_get_attachment_image_url( $imageID, $size );
        }
        else{
            $image = get_template_directory_uri().'/assets/images/hero-hardware.png';
        }
        ?>
        <img src="<?php echo $image;?>" alt="hero" class="img-full">
      </div>
    </div>
    <?php
  } ?>
</section>