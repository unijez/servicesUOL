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

  <?php if( is_active_sidebar('footer-1') ):?>

    <div class="column">


        <?php dynamic_sidebar('footer-1');?>


    </div>	 <!--column-->

  <?php endif; ?>

  <?php if( is_active_sidebar('footer-2') ):?>

    <div class="column">


        <?php dynamic_sidebar('footer-2');?>


    </div>	 <!--column-->

  <?php endif; ?>

  <?php if( function_exists('acf_add_local_field_group') )	:?>

  <div class="column">
      <!--Display Social Media List-->
      <h3>Social Media</h3>
      <?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

  </div>	 <!--column-->

  <?php endif; ?>

</div>
