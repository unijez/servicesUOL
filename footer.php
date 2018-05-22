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

<?php if(get_field("toggle_google_maps", "option") == true): ?>

  <div id="map-canvas" class="footer-top">

    <div id="location_map" class="contact_map"></div>


				<script type="text/javascript">


					function initialize() {


				      var mapCanvas = document.getElementById('location_map');

				      var mapOptions = {
				        center: new google.maps.LatLng(<?php echo 53.2265885//$map['lat']; ?>, <?php echo -0.5494468//$map['lng']; ?>),
				        zoom: 16,
				        draggable: true,
				        scrollwheel: false,
				        mapTypeId: google.maps.MapTypeId.ROADMAP
				      }

				      var map = new google.maps.Map(mapCanvas, mapOptions)

				         var image = {
				             //url: url,
				             //size: size,
				             scaledSize: new google.maps.Size(<?php echo 1440 //$icon_width; ?>, <?php echo 500 //$icon_height; ?>),
				             origin: new google.maps.Point(0,0),
				             anchor: new google.maps.Point(18, 20)
				         };

				        /* var marker = new google.maps.Marker({
				             position: map.getCenter(),
				             map: map,
				             icon: image
				         }); */

				    }
				    google.maps.event.addDomListener(window, 'load', initialize);

						</script>



  </div>  <!-- footer-top -->
<?php endif; ?>

  <div class="footer-middle">

    <?php get_template_part( 'template-parts/footer-widgets' ); ?>

  </div>  <!-- footer-middle -->


  <div class="footer-bottom">

    <div class="logo_container">
      <a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
      </a>
      <p class="credit">Designed by <b>Thomas Moore</b> (2nd year Interactive Design). Developed by <b>Brennan Ceballos Peña</b> (1st year Games Computing).</p>
    </div>

    <p class="coppyright">	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
