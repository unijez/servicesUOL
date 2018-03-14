<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage uolBase
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>


<?php uolBase_content_bottom(); ?>
	
</div><!-- .sitebody-content -->

<?php uolBase_content_after(); ?>


<footer class="site-footer">

  <div class="footer-top">


  	

  </div>  <!-- footer-top -->

  <div class="footer-bottom">


    <a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
    </a>

    <p>	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
