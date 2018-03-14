<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage uolBase
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main">
			
			
			
			<?php if ( have_posts() ) : ?>
			
					
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'uolbase' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
					
			
			
			 		<?php while ( have_posts() ) : the_post(); ?>
			
										
								<?php get_template_part( 'template-parts/content', 'search' ); ?>
									
			
			 		<?php endwhile; ?>
			 						
			 						<?php the_posts_navigation(); ?>
			 					
			 		<?php else:  ?>
			 					
			 					
			 		<?php get_template_part( 'template-parts/content', 'none' ); ?>
			 					
			 					
			
			<?php endif;  wp_reset_query(); ?>


	</main><!-- #main -->




	<?php

get_footer();
