<?php

/**
 * Page Work template
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */
/* Template Name: Work */
get_header(); ?>

<div id="main" class="site-main">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', 'work'); ?>

	<?php endwhile; ?>

</div>

<?php get_footer();
