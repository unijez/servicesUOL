<?php
/**
 * Displays post listing grouping
 * @package WordPress
 * @subpackage unilinc
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<div class="news-post_n excerpted" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="news-container_n">

		<div class="news-post_wrapper_n">

			<div class="news-post_text_n">
	    	<i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time>
				<h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				<p><?php excerpt(40);?></p>
			</div> <!-- news-post_text -->

		</div> <!-- news-post_wrapper -->

	</div> <!-- news-container -->

</div> <!-- post -->
