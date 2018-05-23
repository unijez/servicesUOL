<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<div class="row">

    <div class="column">

      <?php if( function_exists('acf_add_local_field_group') )	:?>

      <div class="widget-container widget_text">
          <h2 class="widget-title">Contact Us</h2>

          <div class="textwidget">
            <p><?php echo get_field("address", "options"); ?></p>
            <p><a href="tel:<?php echo str_replace(' ', '', get_field("telephone_number", "options"));?>"><?php echo sanitize_text_field(get_field("telephone_number", "options")); ?></a></p>
            <p><a href="mailto:<?php echo get_field("e-mail", "options")?>"><?php echo sanitize_text_field(get_field("e-mail", "options")); ?></a></p>
          </div>

      </div>	 <!--column-->


    </div>	 <!--column-->

  <?php if( is_active_sidebar('footer-1') ):?>

    <div class="column">


        <?php dynamic_sidebar('footer-1');?>


    </div>	 <!--column-->

  <?php endif; ?>

  <?php if( function_exists('acf_add_local_field_group') )	:?>

  <div class="column socials">
      <!--Display Social Media List-->
      <h2 class="widget-title">Social Media</h2><?php endif; ?>
      <?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

  </div>	 <!--column-->

  <?php endif; ?>
</div>
