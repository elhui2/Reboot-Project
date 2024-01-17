<?php

/**
 * Footer reboot project
 * @version 0.6.7
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package rebootproject
 */

?>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-pb-sm">
					<p>
						<span class="block">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<?php integer_site_logo(); ?><br>
							<small>Made with <a href="https://github.com/elhui2/Reboot-Project"><i class="fas fa-heart"></i> Copyleft</a> &copy;
								<script>
									document.write(new Date().getFullYear());
								</script>
							</small><br>
						</span>
					</p>
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