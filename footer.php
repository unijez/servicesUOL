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



				      map.set('styles',
              [
    {
        "featureType": "all",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#e7e8ed"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#042c64"
            },
            {
                "weight": "2.00"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#2000ff"
            },
            {
                "weight": "3.00"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "weight": "3.00"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#3100ff"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#042c64"
            },
            {
                "weight": "3.00"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "weight": "3.00"
            },
            {
                "hue": "#3100ff"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#3100ff"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#042c64"
            },
            {
                "weight": "3.00"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#83cead"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#aeb3b6"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#6a7479"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#6a7479"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#aeb3b6"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#7fc8ed"
            }
        ]
    }
]);


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
      <p class="credit">Designed by <b>Thomas Moore</b> (2nd year Interactive Design). Developed by <b>Brennan Pena</b> (1st year Computer Science).</p>
    </div>

    <p class="coppyright">	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
