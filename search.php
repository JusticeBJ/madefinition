<?php
get_header();
?>
<section class="page page--search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : ?>

					<header class="search-header">
						<h1 class="search-header__title title"><?php printf( __( 'Search results for: %s', 'am_theme_translate' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'content', 'search' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'am_theme_translate' ),
						'next_text'          => __( 'Next page', 'am_theme_translate' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'am_theme_translate' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
