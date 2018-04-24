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

<div class="news-post excerpted" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="news-container">

		<div class="news-post_wrapper">

			<div class="news-post_text">
	    	<i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time>
				<h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				<p><?php excerpt(40);?></p>
			</div> <!-- news-post_text -->

			<div class="news-post_img">
				<a href="<?php the_permalink();?>">
		    		<?php the_post_thumbnail('large'); ?>
		    </a>
			</div> <!-- news-post_img -->

		</div> <!-- news-post_wrapper -->

	</div> <!-- news-container -->

</div> <!-- post -->
