<?php
/**
 * The template for displaying all pages.
 * @version 0.7.2
 * @package RebootProject
 * No se usa
 */
/* Template Name: Half */
get_header(); ?>

<div id="main" class="site-main">

	<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'half' ); ?>

	<?php endwhile; ?>

</div>

<?php //get_sidebar(); ?>

<?php get_footer();
