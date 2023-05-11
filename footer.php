<?php

/**
 * Footer reboot project
 * @version 0.5.1
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
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
						<a href="https://www.facebook.com/rebootprojectmx/" target="_blank"><span style="font-size: 48px; color:white" class="dashicons dashicons-facebook"></span></i></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php
wp_footer();

if (is_home()) {

?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/flexslider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.flexslider-min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.waypoints.min.js"></script>

	<!-- Counters -->
	<!-- <script src="js/jquery.countTo.js"></script> -->
	<!-- Owl Carousel -->
	<!-- <script src="js/owl.carousel.min.js"></script> -->

	<!-- Main JS (Do not remove) -->
	<!-- <script src="js/main.js"></script> -->
	<script>
		$(function() {

			$('#colorlib-hero .flexslider').flexslider({
				animation: "fade",
				slideshowSpeed: 5000,
				directionNav: true,
				start: function() {
					setTimeout(function() {
						$('.slider-text').removeClass('animated fadeInUp');
						$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
					}, 500);
				},
				before: function() {
					setTimeout(function() {
						$('.slider-text').removeClass('animated fadeInUp');
						$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
					}, 500);
				}

			});
			var i = 0;
			$('.animate-box').waypoint(function(direction) {

				if (direction === 'down' && !$(this.element).hasClass('animated')) {

					i++;

					$(this.element).addClass('item-animate');
					setTimeout(function() {

						$('body .animate-box.item-animate').each(function(k) {
							var el = $(this);
							setTimeout(function() {
								var effect = el.data('animate-effect');
								if (effect === 'fadeIn') {
									el.addClass('fadeIn animated');
								} else {
									el.addClass('fadeInUp animated');
								}

								el.removeClass('item-animate');
							}, k * 200, 'easeInOutExpo');
						});

					}, 100);

				}

			}, {
				offset: '85%'
			});
		});
	</script>
<?php
}
?>

</body>

</html>