<?php

/**
 * The main template file.
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package RebootProject
 */

get_header(); ?>

<div id="main" class="container">
	<div class="row">
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<div class="col-lg-12 rp-<?php integer_grid_class(); ?>">
					<?php get_template_part('template-parts/content'); ?>
				</div>
			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>
	</div>

	
</div>
<?php bootstrap_posts_pagination(); ?>

<?php get_sidebar(); ?>

<?php get_footer();
