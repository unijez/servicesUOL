<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php ServicesUOL_body_top(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ServicesUOL' ); ?></a>

	<div class="header-search site-module hide">

		<div class="module-inner-wrap">

			<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" placeholder="<?php _e( 'Type and press enter', 'ServicesUOL' ); ?>" name="s" id="s" />
			</form>

		</div> <!--module-inner-wrap-->

	</div> <!--header-search-->


	<header id="masthead" class="site-header">

		<?php ServicesUOL_header_top(); ?>


		<div class="site-branding">

			<div class="logo_container">
				<a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
					<img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
				</a>
			</div>

			<div class="site-title_container">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'schoolsUOL' ); ?></button>

<!--			<?php//
//			wp_nav_menu( array(
//				'theme_location' => 'primary-menu',
//				'menu'            => '',
//				'container'       => '',
//				'container_class' => '',
//				'menu_class'      => 'primary-menu'
//			) );
//			?>-->
			<ul class="primary-menu">
			<?php

					$nav_args = array(
						'container' 		=> '',
						'theme_location' => 'primary-menu',
						'items_wrap' 		=> '%3$s'
					);

					wp_nav_menu( $nav_args );

				?>
			</ul>

			<li class="search-toggle-menu"><button href="#" class="search-toggle main-btn" title="<?php _e( 'Show the search field', 'ServicesUOL' ); ?>"><i class="fas fa-search"></i></button></li>

		</nav><!-- #site-navigation -->




		<?php ServicesUOL_header_bottom(); ?>


	</header><!-- #masthead -->
	<ul class="mobile-header-control level-elements">

		<li class="search-toggle-menu-item"><button class="mobile-menu-button main-btn" aria-controls="primary-menu" aria-expanded="false"><i class="fal fa-align-left"></i></button></li>
		<li class="search-toggle-menu"><button href="#" class="search-toggle main-btn" title="<?php _e( 'Show the search field', 'schoolsUOL' ); ?>"><i class="fas fa-search"></i></button></li>

	</ul>
	<nav class="mobile-navigation hide">

		<ul class="primary-menu clear">

			<?php

				if ( has_nav_menu( 'primary-menu' ) ) {

						wp_nav_menu( $nav_args );

				} else {

						wp_list_pages( $list_pages_args );

				}

			?>

		</ul><!-- .main-menu -->

	</nav><!-- .mobile-navigation -->


<?php ServicesUOL_head_after(); ?>

<?php ServicesUOL_content_before(); ?>

<div class="sitebody-content">

	<?php ServicesUOL_content_top(); ?>
