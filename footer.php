<?php

/**
 * Footer reboot project
 * @version 0.6.9
 * @author rebootproject
 * @package rebootproject
 */

?>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-pb-sm">
					<?php if (is_active_sidebar('sidebar-1')) : ?>

						<div class="widget-area-secondary__wrap">

							<?php dynamic_sidebar('sidebar-1'); ?>

						</div>

					<?php endif; ?>
				</div>
				<div class="col-md-4 col-pb-sm">
					<?php if (is_active_sidebar('sidebar-2')) : ?>

						<div class="widget-area-secondary__wrap">

							<?php dynamic_sidebar('sidebar-2'); ?>

						</div>

					<?php endif; ?>
				</div>
				<div class="col-md-4 col-pb-sm right-display">
					<h2>Síguenos</h2>
					<p class="colorlib-social-icons colorlib-social-icons2">
						<a href="<?php echo get_theme_mod('rbpj_facebook'); ?>" target="_blank"><span style="font-size: 48px; color:white" class="dashicons dashicons-facebook"></span></i></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
<?php wp_footer(); ?>

</body>

</html>