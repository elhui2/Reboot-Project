<?php

/**
 * The main template file.
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

get_header(); ?>

<div id="main" class="container">
	<div class="row">
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<div class="col-lg-6 rp-<?php integer_grid_class(); ?>">
					<?php get_template_part('template-parts/content'); ?>
				</div>
			<?php endwhile; ?>

			<?php integer_posts_pagination('blogroll__pagination'); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>
	</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer();
