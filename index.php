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

get_header();
$count = 1;
?>

	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

				<div class="row site-module-inner news-padding">
					<!-- Loop through all the posts -->
					<?php while ( have_posts() ) : the_post(); ?>
						<!-- If the post has a thumbnail execute below -->
						<?php if(has_post_thumbnail()): ?>
						<?php if($count == 2) { echo "</div>"; } ?> <!-- Close off the long post with image on the second loop -->
						<div class="item">
								<?php get_template_part( 'template-parts/post-listing-index-image' ); ?>

						</div> <!-- item -->
						<?php $count = 1; ?> <!-- reset the post counter -->
					<?php else: //If the count is 1 then it needs to be in a group because it doesn't have an image
						if($count == 1) {
							echo "<div class='group'>";
						}
						get_template_part('template-parts/post-listing-index-no_image');
						if($count == 2) {
							echo "</div>"; //Close off the group
						}
						$count++; //Increase the counter
						if($count > 3) { //Reset the counter if it gets to high
							$count = 1;
						}
						endif; ?>
					<?php endwhile; ?>

					</div> <!-- row -->
					<!-- Pagination for the different results pages -->
				<?php the_posts_pagination( array(
					'mid_size' => 1,
					'prev_text' => __( 'Prev', 'collegeBlog' ),
					'next_text' => __( 'Next', 'collegeBlog' ),
				) ); ?>

				<?php endif;  wp_reset_query(); ?>

			</div><!-- content-container -->

	</main><!-- #main -->


<?php get_footer(); ?>
