<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Useful_Bits
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container">
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'useful-bits' ); ?></a>


<header id="masthead" class="site-header">

			<div class="site-branding">
				
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			
				
				
					<?php
				$useful_bits_description = get_bloginfo( 'description', 'display' );
				
					?>
					<p class="site-description"><?php echo $useful_bits_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				

 			</div><!-- .site-branding -->

			 	<!-- HAMBURGER MENU -->
	<a href="#" class="menu-toggle">
			<img src="<?php bloginfo('template_directory');?>/images/menu-icon.svg" class="menu-toggle">
		</a>

		<div class="menu">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
		

</header><!-- #masthead -->
