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
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

				<div class="row site-module-inner news-padding">

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="item">

								<?php get_template_part( 'template-parts/post-listing-index' ); ?>

						</div> <!-- item -->

						<?php endwhile; ?>

					</div> <!-- row -->

				<?php the_posts_pagination( array(
					'mid_size' => 1,
					'prev_text' => __( 'Prev', 'collegeBlog' ),
					'next_text' => __( 'Next', 'collegeBlog' ),
				) ); ?>

				<?php endif;  wp_reset_query(); ?>

			</div><!-- content-container -->

	</main><!-- #main -->


<?php get_footer(); ?>
