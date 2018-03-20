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


						<!--More Details https://codex.wordpress.org/Class_Reference/WP_Query-->


	 					<?php

		 					$args = array(

		 						'post_type' => 'post',
		 						'posts_per_page' => 1,
		 						'post__not_in' => get_option( 'sticky_posts' )
		 					);


		 					$home_featured_posts = new WP_Query( $args );

		 					if ( $home_featured_posts->have_posts() ) :


	 					?>



	 							<?php while ( $home_featured_posts->have_posts() ) : $home_featured_posts->the_post() ?>


	 														<!--//All post content here...-->

	 													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	 																	<?php the_title(); ?></a>



	 							<?php endwhile ?>




	 					<?php endif;  wp_reset_query(); ?>



	 					<!--Normal Default Page Loop-->

	 					<?php if ( have_posts() ) : ?>

	 					 	<?php while ( have_posts() ) : the_post(); ?>


	 								<?php get_template_part( 'template-parts/content', 'page' ); ?>


	 								<?php if ( comments_open() || get_comments_number() ) : ?>


	 									<div class="comments-container">

	 										 <?php  comments_template(); ?>

	 									</div> <!-- comments-container -->


	 								 <?php endif; ?>


	 					 	<?php endwhile; ?>


	 					<?php endif;  wp_reset_query(); ?>



	</main><!-- #main -->


<?php get_footer(); ?>
