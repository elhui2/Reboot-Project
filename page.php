<?php
/**
 * The template for displaying un half page size.
 * @version 0.7.2
 * @package Reboot Project
 */

get_header(); ?>

<div id="main" class="site-main">

	<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>

				<?php comments_template(); ?>

			<?php endif; ?>

	<?php endwhile; ?>

</div>

<?php //get_sidebar(); ?>

<?php get_footer();
