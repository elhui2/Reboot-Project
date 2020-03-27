<?php

/**
 * The template for displaying the header.
 *
 * @package Integer
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav id="colorlib-main-nav" role="navigation">
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
							<!-- <a class="colorlib-logo" href="index.html">Reboot</a> -->
							<?php integer_site_logo(); ?>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
					
				</div>
			</div>
			<!-- <div class="site-header__branding site-branding">

				<?php integer_site_title(); ?>
			</div> -->
		</header>