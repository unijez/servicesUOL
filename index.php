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

					<?php while ( have_posts() ) : the_post(); ?>

						<?php if(has_post_thumbnail()): ?>
						<?php if($count == 2) { echo "</div>"; } ?>
						<div class="item">
								<?php get_template_part( 'template-parts/post-listing-index-image' ); ?>

						</div> <!-- item -->
						<?php $count = 1; ?>
					<?php else:
						if($count == 1) {
							echo "<div class='group'>";
						}
						get_template_part('template-parts/post-listing-index-no_image');
						if($count == 2) {
							echo "</div>";
						}
						$count++;
						if($count > 3) {
							$count = 1;
						}
						endif; ?>
					<?php endwhile; ?>

					</div> <!-- row -->

				<?php the_posts_pagination( array(
					'mid_size' => 1,
					'prev_text' => __( 'Prev', 'collegeBlog' ),
					'next_text' => __( 'Next', 'collegeBlog' ),
				) ); ?>

				<?php endif;  wp_reset_query(); ?>
<div class="sitebody-closer">
<?php get_footer(); ?>
