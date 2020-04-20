<?php

/**
 * The template used for displaying post content in single.php.
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

?>
<div class="portfolio-gap"></div>
<div class="container" style="margin-top: 48px">
	<div class="row row-padded-bottom">
		<div class="col-md-12">
			<article id="post-<?php the_ID(); ?>" class="blog-entry">

				<?php integer_post_thumbnail(); ?>
				<?php the_title('<h1>', '</h1>'); ?>

				<div class="entry-content">
					<?php //integer_entry_meta_before_title(); 
					?>
					<?php //integer_entry_meta_before_content(); 
					?>

					<?php the_content(); ?>

					<?php
					// wp_link_pages(
					// 	array(
					// 		'before' => '<div class="page-links">' . __('Pages:', 'integer'),
					// 		'after' => '</div>',
					// 	)
					// );
					?>

				</div>

				<?php //integer_entry_footer_widgets(); 
				?>

				<?php //integer_entry_meta_after_content(); 
				?>

			</article>
		</div>
	</div>
</div>