<?php

/**
 * The template used for displaying page content in page-half.php.
 * @version 0.7.2
 * @author Reboot Project rebootproject.mx
 * @package RebootProject
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<header class="entry-header">

				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			</header>

			<?php integer_post_thumbnail(); ?>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __('Pages:', 'integer'),
						'after' => '</div>',
					)
				);
				?>
			</div>
		</div>
	</div>

</article>