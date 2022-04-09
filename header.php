<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outfitlada
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'outfitlada' ); ?></a>

	<div class="announcement-bar py-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="announcement-bar__list">
						<li>
						<i class="bi bi-telephone rounded-circle"></i>
						<a href="tel: +44 555 33322" class="text-decoration-none">+44 555 33322</a>
						</li>

						<li>
						<i class="bi bi-envelope rounded-circle"></i>
						<a href="mailto: hello@outlada.com"  class="text-decoration-none">hello@outlada.com</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8 d-flex justify-content-end">
				<ul class="announcement-bar__list">
						<li>
						<i class="bi bi-truck rounded-circle"></i>
						FREE EU SHIPPING
						</li>

						<li>
						<i class="bi bi-clock-history rounded-circle"></i>
						30 DAYS MONEYBACK GUARANTEE
						</li>
						
						<li>
						<i class="bi bi-person rounded-circle"></i>
						24/7 CUSTOMER SUPPORT
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header">

		<div class="container pt-2 pb-2">

			<div class="row align-items-center">
	
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start">
					<?php the_custom_logo(); ?>
				</div>

				<div class="col-sm-12 col-md-5">
					<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center pt-2">
				
					<?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="bi bi-person-circle fs-4 px-2"></i></a>
				<?php } 
				else { ?>
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="bi bi-person-circle fs-4 px-2"></i></a>
				<?php } ?>

				<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart4 fs-4 px-2"></i></a>	
				
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( 'Primary Menu', 'pawsgang' ); ?>
						</button>
					</div>

					<div class="col-12 text-center">
						<?php			
							wp_nav_menu(
								array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
								)
							);
						?>
					</div>

				</div>
			</div>
		</nav>

	</header><!-- #masthead -->