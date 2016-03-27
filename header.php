<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header id='header' class='headroom'>
			<div id='brand'>
				<div class='brand-title'>
					<a href=''>TONY</a>
				</div>
			</div>
			<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</header>
