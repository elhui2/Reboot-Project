<?php

/**
 * The template for displaying all single posts.
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

get_header(); ?>



	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', 'single'); ?>

		<?php //integer_post_navigation(); 
		?>

		<?php if (comments_open() || get_comments_number()) : ?>

			<?php //comments_template(); 
			?>

		<?php endif; ?>

	<?php endwhile; ?>


<?php //get_sidebar(); 
?>

<?php get_footer();
