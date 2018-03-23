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


<?php ServicesUOL_content_bottom(); ?>

</div><!-- .sitebody-content -->

<?php ServicesUOL_content_after(); ?>


<footer class="site-footer">

  <div class="footer-top">

    <img class="map" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/map.png" alt="<?php bloginfo( 'name' ); ?> University of Lincoln Campus Map">

  </div>  <!-- footer-top -->


  <div class="footer-middle">


  </div>  <!-- footer-middle -->


  <div class="footer-bottom">

    <div class="logo_container">
      <a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
      </a>
    </div>

    <p class="coppyright">	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
