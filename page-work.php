<?php

/**
 * Page Work template
 * @version 0.7.2
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 * @deprecated V 0.7.2
 * No se usa
 */
/* Template Name: Work */
get_header(); ?>

<div id="main" class="site-main">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', 'work'); ?>

	<?php endwhile; ?>

</div>

<?php get_footer();
