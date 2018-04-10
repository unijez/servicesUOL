<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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


				                <?php if ( comments_open() || get_comments_number() ) : ?>


				                  	<div class="comments-container">

					                  <?php  comments_template(); ?>

				                	</div> <!-- comments-container -->

				              <?php endif; ?>


 					<?php endwhile; ?>


			<?php endif;  wp_reset_query(); ?>


 		</main><!-- #main -->


 	<?php get_footer(); ?>
