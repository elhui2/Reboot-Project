<?php

/**
 * header.php
 * @version 0.5.1
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">

							<?php
							if (is_front_page()) {
								integer_site_logo();
							} else {
								integer_site_logo(); ?>

								<!-- <a href="<?php echo get_site_url() ?>"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo_light.png" width="200"></a> -->
							<?php
							}
							?>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" style="text-decoration: none;">
							<span style="margin:0; color:white" class="dashicons dashicons-menu-alt3"></span>
						</a>
					</div>
				</div>
			</div>
		</header>