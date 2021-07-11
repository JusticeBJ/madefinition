
<?php
// if( have_rows('page_builder') ):
// while ( have_rows('page_builder') ) : the_row();
// if( get_row_layout() == 'home_hero' ):
// include(get_template_directory().'/includes/partial-home-hero.php');
// elseif( get_row_layout() == 'services' ):
// include(get_template_directory().'/includes/partial-services.php');
// endif;
// endwhile;
// endif;
?>

<h1 style="color:blue;">This is: <?php echo get_field('title_s') ?> ...</h1>
<h1 style="color:blue;">This is: <?php echo get_field('title') ?> ...</h1>

    <?php $post= get_field("display_services_page");
        if($post==1){
            $style= 'block';
            echo $post;
        }
        else{
            $style= 'none';
        }
    ?>
    <h1>This is: <?php echo get_field('title') ?> ...</h1>
    

<!-- Using the Wordpress with out Flexible content -->
<!-- https://www.advancedcustomfields.com/resources/get_row/ -->