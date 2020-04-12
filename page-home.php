<?php

/**
 * page-home.php
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @version 0.3
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
								<h1>Diseño y programación de productos digitales.</h1>
								<p><a class="btn btn-primary btn-learn">Contáctanos</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="slide1">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
							<div class="slider-text-inner">
								<h2>Arquitectura</h2>
								<h1>Organización y estructuración de la información del proyecto.</h1>
								<p><a class="btn btn-primary btn-learn">Contáctanos</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="slide2">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
							<div class="slider-text-inner">
								<h2>Diseño</h2>
								<h1>Experiencia centrada en usuario y dispositivos móviles.</h1>
								<p><a class="btn btn-primary btn-learn">Contáctanos</a></p>
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
			<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
				<h2>¿Qué Hacemos?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-pen3"></i></span>
					<div class="desc">
						<h3>UX / UI</h3>
						<p>Diseño de experiencia e interfaz del usuario.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-monitor"></i></span>
					<div class="desc">
						<h3>Sitios y Aplicaciones Web</h3>
						<p>Desarrollo y/o customización de templetes, plugins y módulos en diversos lenguajes.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-home4"></i></span>
					<div class="desc">
						<h3>Soliuciones IoT</h3>
						<p>Prototipo y desarrollo de dispositivos. Monitoreo de ambientes y máquinas. Dashboard
							personalizado.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-appleinc"></i></span>
					<div class="desc">
						<h3>iOS</h3>
						<p>Desarrollo y migraciones de Swift, Appcelerator y Flutter. Funciones online y offline
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-android"></i></span>
					<div class="desc">
						<h3>Android</h3>
						<p>Desarrollo y migraciones de Java, Appcelerator y Flutter. Múltiples versiones de
							Android</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon"><i class="icon-code"></i></span>
					<div class="desc">
						<h3>Open Source</h3>
						<p>Creemos que el código abierto es el futuro y queremos compartir algunas ideas.
							¿Participas en algún proyecto? Nos interesa conocer más</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
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
							<h3><?php the_title(); ?></h3>
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