<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
* @package WordPress
* @subpackage ServicesUOL
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