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
<!-- template for the front page post listings -->
<div class="news-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="item-text">

		<div class="icon-date">
    	<i class="calendar-icon fal fa-calendar-alt"></i><span class="news-post-date date-published" content="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></span>
		</div>

		<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

		<div class="post-img">
	    <a href="<?php the_permalink();?>">
	    		<?php default_image('medium'); ?>
	    </a>
		</div>

		<p><?php excerpt(20);?></p>
	</div> <!-- item-text -->
</div> <!-- post -->
