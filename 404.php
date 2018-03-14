<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main">
				
				<div class="container-404">
					
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ServicesUOL' ); ?></h1>
						
							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'ServicesUOL' ); ?></p>

						
				</div> <!-- 404-container -->

	</main><!-- #main -->


<?php get_footer(); ?>