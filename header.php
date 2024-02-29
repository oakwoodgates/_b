<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oakwood
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'oakwood'); ?></a>

		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-dark bg-dark" aria-label="Offcanvas navbar large">
				<div class="container">
					<div class="navbar-brand">
						<?php the_custom_logo(); ?>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar3" aria-controls="offcanvasNavbar3" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar3" aria-labelledby="offcanvasNavbar3Label">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbar3Label">Offcanvas</h5>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
								<?php
								wp_nav_menu(
									[
										'fallback_cb'    => false,
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'     => 'navbar-nav',
										'container'      => false,
										'walker' => new BS5_Nav_Menu()
									]
								);
								?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
