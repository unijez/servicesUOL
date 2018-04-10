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



					<div class="about-wrapper">

						<div class="about-wrapper_text">
							<h1 class="about-wrapper_heading">Welcome to the <?php bloginfo( 'name' ); ?> website</h1>
							<?php echo get_the_excerpt(); ?>

							<?php
    					query_posts("page_id=143");
    						while ( have_posts() ) : the_post()
							?>
    					<?php the_excerpt(); ?>

							<?php
    						endwhile;
    					wp_reset_query();
							?>
						</div><!-- about-wrapper_text -->

						<div class="about-wrapper_img">
							<!-- IF STATEMENT NEEDED FOR ERROR -->
							<?php the_post_thumbnail( $post = 143, 'small' ); ?>
						</div><!-- about-wrapper_img -->

					</div><!-- about-wrapper -->



					<div class="extended-navigation_wrapper">

						<?php $extended_navigation = get_field( 'extended_navigation' ); ?>
						<?php if ( $extended_navigation ): ?>
							<?php foreach ( $extended_navigation as $post ):  ?>
								<?php setup_postdata ( $post ); ?>

								<div class="extended-navigation_item">
									<a class="extended-navigation_link" href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="far fa-angle-right"></i></a>
									<div class="extended-navigation_description">
										<?php the_field( 'postpage_description' ); ?>
									</div>
								</div><!-- extended-navigation_item -->

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					</div><!-- extended-navigation_wrapper -->



					<h1 class="content-heading">The Latest News</h1><i class="far fa-angle-down"></i>
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
