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

			<ul>
							<?php
							$defaults = array(
								'theme_location'  => 'primary-menu',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );
							?>
					</ul> <!-- collapse -->

					<?php get_search_form() ?>

		</nav><!-- #site-navigation -->


		<?php ServicesUOL_header_bottom(); ?>


	</header><!-- #masthead -->


<?php ServicesUOL_head_after(); ?>

<?php ServicesUOL_content_before(); ?>

<div class="sitebody-content">

	<?php ServicesUOL_content_top(); ?>
