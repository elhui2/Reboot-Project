<?php

/**
 * page-home.php
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 * Homepage
 */
get_header()
?>

<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li class="slide0">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
							<div class="slider-text-inner">
								<h1>Diseño web.</h1>
								<p style="color: #ececec">
									Desarrollamos sitios web a medida y con cualquier CMS. Wordpress, Magento, Drupal. Etc
								</p>
								<a class="btn btn-primary btn-learn">Contáctanos</a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div id="colorlib-services">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center animate-box intro-heading">
				<h2>Desarrollo de software</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-appleinc"></i></span>
					<div class="desc">
						<h3>Aplicaciones</h3>
						<p>Desarrollamos apps para iPhone y Android.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-monitor"></i></span>
					<div class="desc">
						<h3>Sitios Web</h3>
						<p>Convertimos tu idea en website. Plantillas bootstrap, sitios wordpress, ecommerce.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-home4"></i></span>
					<div class="desc">
						<h3>Diseño gráfico</h3>
						<p>Desde Diseño de UI/UX hasta logos de marcas</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-blog">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center animate-box intro-heading">
				<h2>Blog</h2>
			</div>
		</div>
		<div class="row">

			<div class="blog-flex">
				<?php
				$args = array(
					'numberposts' => 3
				);

				$latest_posts = get_posts($args);
				foreach ($latest_posts as $home) {
				?>
					<div class="col-md-4">
						<a href="<?php echo get_permalink($home->ID) ?>" class="f-blog animate-box">
							<img src="<?php echo get_the_post_thumbnail_url($home, $size = 'rp-featured', array('class' => 'img-responsive')) ?>">
							<p class="meta"><span><?php echo get_the_category($home->ID)[0]->name ?></span> | <span><?php echo get_the_date('l F j, Y', $home) ?></span></p>
							<h4><?php echo $home->post_title ?></h4>
							<p><?php echo $home->post_excerpt ?></p>
							<p class="read-more">Ver completa <i class="icon-arrow-right3"></i></p>
						</a>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center animate-box intro-heading">
				<h2>Nuestro Trabajo</h2>
			</div>
		</div>

		<div class="row">
			<?php
			$args = array(
				'post_type' => array('page'),
				'meta_kay' => 'page_type',
				'meta_query' => array(
					array(
						'key' => 'page_type',
						'value' => 'work',
					)
				)
			);

			$myposts = query_posts($args);
			foreach ($myposts as $post) : ?>
				<div class="col-md-6 animate-box text-center">
					<a href="<?php the_permalink(); ?>" class="work-img" style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>')">
						<div class="overlay"></div>
						<div class="desc">
							<span class="icon"><i class="icon-heart-outline"></i></span>
							<p class="tag"><span>Desarrollo Web</span> / <span>PHP</span></p>
							<h5><?php the_title(); ?></h5>
							<span class="read-more">Leer más <i class="icon-arrow-right3"></i></span>
						</div>
					</a>
				</div>
			<?php endforeach;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>