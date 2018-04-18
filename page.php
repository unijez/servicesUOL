<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
<?php get_template_part( 'template-parts/featured-image' ); ?>
<main id="main" class="site-main">
 			<?php if ( have_posts() ) : ?>

 				<?php while ( have_posts() ) : the_post(); ?>

          <div class="content-container">

								<?php get_template_part( 'template-parts/content', 'page' ); ?>


				                <?php if ( comments_open() || get_comments_number() ) : ?>


				                  	<div class="comments-container">

					                  <?php  comments_template(); ?>

				                	</div> <!-- comments-container -->

          </div>

				              <?php endif; ?>


 					<?php endwhile; ?>


			<?php endif;  wp_reset_query(); ?>


</main><!-- #main -->
<?php
get_footer();
