<?php

/**
 * header.php
 * @version 0.6.8
 * @author  rebootproject.mx
 * @package Reboot Project
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active" style="text-decoration: none;"><span style="margin:0; color:white" class="dashicons dashicons-no"></span></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'primary-menu__list',
						'container' => false,
					)
				);
				?>
			</div>
		</div>
	</nav>

	<div id="colorlib-page" class="site">
		<?php if (has_nav_menu('primary')) : ?>

		<?php elseif (current_user_can('edit_theme_options')) : ?>

			<p class="no-main-navigation">
				<span><?php esc_html_e('No menu assigned.', 'integer'); ?> </span>
				<a href="<?php echo esc_url(get_admin_url(null, '/customize.php?autofocus[panel]=nav_menus')); ?>"><?php esc_html_e('Add now.', 'integer'); ?></a>
			</p>

		<?php endif; ?>
		<header id="rbpj-mainnav">
			<div class="container ">
				<div class="row">
					<div class="col-5">
						<?php
						integer_site_logo();
						?>
					</div>
					<div class="col-7">

						<div id="search-container" class="d-none d-lg-block animate__animated animate__fadeInDown">
							<?php get_search_form(); ?>
						</div>

						<div class="btn-group float-end mt-2">
							<button type="button" class="btn d-lg-none" id="search-button">
								<span class="dashicons dashicons-search text-white"></span>
							</button>
							<?php
							if (class_exists('WooCommerce')) {
							?>
								<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>" class="btn">
									<span class="dashicons dashicons-cart text-white"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
								</a>
								<a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>" title="<?php _e('View your shopping profile'); ?>" class="btn">
									<span class="dashicons dashicons-admin-users text-white"></span>
								</a>
							<?php	// code that requires WooCommerce
							}
							?>
							<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle btn">
								<span class="dashicons dashicons-menu-alt3 text-white"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>