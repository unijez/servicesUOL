<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
	
	 				<?php while ( have_posts() ) : the_post(); ?>
	
								
									<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
							
	
	 					<?php endwhile; ?>
	 						
	 						<?php the_posts_navigation(); ?>
	 					
	 					<?php else:  ?>
	 					
	 					<?php get_template_part( 'template-parts/content', 'none' ); ?>
	 					
	
				<?php endif;  wp_reset_query(); ?>
	
	
	</main><!-- #main -->


<?php get_footer(); ?>