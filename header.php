<?php

/**
 * header.php
 * @version 0.6.6
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php get_search_form(); ?>
					</div>
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<?php
							integer_site_logo();
							?>
						</div>
						<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
							<span style="margin:0; color:white" class="dashicons dashicons-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</a>
						<a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>" title="<?php _e('View your shopping profile'); ?>">
							<span style="margin:0; color:white" class="dashicons dashicons-admin-users"></span>
						</a>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" style="text-decoration: none;">
							<span style="margin:0; color:white" class="dashicons dashicons-menu-alt3"></span>
						</a>
					</div>
				</div>
			</div>
		</header>