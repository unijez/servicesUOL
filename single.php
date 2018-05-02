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

    <?php get_template_part( 'template-parts/featured-image' ); ?>

 		<main id="main" class="site-main">

 			<?php if ( have_posts() ) : ?>


 				<?php while ( have_posts() ) : the_post(); ?>


          <div class="content-container">

								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                <?php
                //Is there a next or previous post?
                $prev_link = get_previous_post_link();
                $next_link = get_next_post_link();

                //Get the next or previous link url
                $previous = get_previous_post();
                $next = get_next_post();

                ?>

                <?php if ($prev_link || $next_link): ?>

	                 <ul class="single-pagination">

		                     <li class="single-pagination__link">

			                      <?php if ($prev_link) : ?>

						                   <a class="main-btn block-button dark" href="<?php echo $previous->guid ?>"><i class="far fa-angle-left"></i>  Previous Post</a>

			                      <?php endif; ?>

		                     </li>

		                     <li class="single-pagination__link">

		                         <?php if ($next_link) : ?>

					                     <a class="main-btn block-button dark" href="<?php echo $next->guid ?>">Next Post <i class="far fa-angle-right"></i></a>

		                         <?php endif; ?>
		                    </li>

 	                 </ul><!-- single-pagination -->


                 <?php endif; ?>



				         <?php if ( comments_open() || get_comments_number() ) : ?>


				           <div class="comments-container">

					              <?php  comments_template(); ?>

				           </div> <!-- comments-container -->

          </div>

				         <?php endif; ?>


 					<?php endwhile; ?>


			<?php endif;  wp_reset_query(); ?>


 		</main><!-- #main -->


 	<?php get_footer(); ?>
