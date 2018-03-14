<?php
/**
 * Displays a list of social media icons
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( have_rows( 'social_media_repeater', 'option' ) ) : ?>

	<ul class="social">

		<?php while ( have_rows( 'social_media_repeater', 'option' ) ) : the_row(); ?>
		
		<?php
			//Vars
			$socialchannel = get_sub_field( 'social_media_type' );
			$socialurl = get_sub_field( 'social_media_link' );
			$select_value = get_sub_field( 'social_media_type' );
		?>
		
		<li class="social__item">

		<?php if (strpos($select_value, 'envelope') !== false) : ?>
			
			<a href="mailto:<?php echo($socialurl) ?>"  target="_blank test">
		
		<?php else :  ?>
		
			<a href="<?php echo($socialurl) ?>" target="_blank">
							
		<?php endif; ?>
	
				<span class="icon_wrap">
			
						<?php if (stripos($select_value, "facebook") !== false) : ?>
							
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-f"></i>
						
						<?php elseif (strpos($select_value, 'linkedin') !== false) :  ?>
						
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-in"></i>
						
						<?php elseif (strpos($select_value, 'pinterest') !== false) :  ?>
						
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-p"></i>
							
						<?php elseif (strpos($select_value, 'vimeo') !== false) :  ?>
							
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-v"></i>
						
						<?php elseif (strpos($select_value, 'rss') !== false) :  ?>
							
							<i class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>
			
						<?php elseif (strpos($select_value, 'google-plus') !== false) :  ?>
						
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-g"></i>
	
						<?php elseif (strpos($select_value, 'envelope') !== false) :  ?>
							
							<i class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>
						
						<?php else :  ?>
							
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>
							
						<?php endif; ?>	
						
						
				</span> <!--icon_wrap-->
				
			</a>
		</li>
	
		<?php endwhile; ?>
		
	</ul>	
	
	<?php else : ?>
	
		<?php // no rows found ?>
		
	
<?php endif; ?>