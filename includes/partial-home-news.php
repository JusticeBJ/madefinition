<section class="news"> 
<?php  $image = get_template_directory_uri().'/assets/images/waves-yellow1.png'; ?>
  <img src="<?php echo $image;?>" class="img-full">

    <div class="news__content">
        <div class="container">
            <h1 class="heading-font">News Updates</h1>
            <div class="row">

            <?php 

                    // args
                    $args = array(
                        'posts_per_page'	=> 1,
                        'post_type'		=> 'post'
                    );

                    // query
                    $the_query = new WP_Query( $args );

                    if( $the_query->have_posts() ):
                        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            
                            <div class="col-md-9 news__column">
                                <div class="news__post">
                                    <div class="news__image img-full">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="news__text">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>
                                        <h6><?php the_author(); ?></h6>
                                        <span><?php the_date('d F Y'); ?></span> 
                                        <img src="https://s30246.pcdn.co/wp-content/uploads/2020/01/5stars.svg" class="news__rate">
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile; 
                    endif; ?>

                    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
               
            </div>
        </div>
    </div>
    <?php  $image = get_template_directory_uri().'/assets/images/waves-yellow.png'; ?>
    <img src="<?php echo $image;?>" class="img-full">
</section>