<?php
/**
 * The main Front page File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

				<div class="content-container">

					<h1 class="content-heading">The Lastest News</h1><i class="far fa-angle-down"></i>

					<div class="news-wrapper">

						<!--More Details https://codex.wordpress.org/Class_Reference/WP_Query-->

	 					<?php

		 					$args = array(

		 						'post_type' => 'post',
		 						'posts_per_page' => 3,
		 						'post__not_in' => get_option( 'sticky_posts' )
		 					);


		 					$home_featured_posts = new WP_Query( $args );

		 					if ( $home_featured_posts->have_posts() ) :


	 					?>

	 							<?php while ( $home_featured_posts->have_posts() ) : $home_featured_posts->the_post() ?>

	 														<!--//All post content here...-->


	 													<?php get_template_part( 'template-parts/post-listing' ); ?>



	 							<?php endwhile ?>


	 					<?php endif;  wp_reset_query(); ?>

					</div><!-- news-wrapper -->

					<h1 class="content-heading">Social Media</h1><i class="far fa-angle-down"></i>

					<div class="social-wrapper">

						<div class="social-text">
							<?php the_field( 'social_media_text_' ); ?>
						</div>

						<div class="social-icons">
							<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>
						</div>

					</div><!-- social-wrapper -->

				</div><!-- font-page_container -->

	</main><!-- #main -->


<?php get_footer(); ?>
