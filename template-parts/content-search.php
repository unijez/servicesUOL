<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header clear searched-header">
		<div class="icon-date">
    	<i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time>
		</div>
		<?php the_title( sprintf( '<h2 class="page-title__inner"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary searched-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer searched-footer">
		<?php ServicesUOL_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
