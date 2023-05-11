<?php

/**
 * The template used for displaying post content in single.php.
 * @version 0.5.1
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */
get_header()
?>

<div class="container-fluid">
	<div class="row">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">

	</div>
</div>

<div class="container">
	<article>
		<?php the_title('<h1>', '</h1>'); ?>
		<?php the_content(); ?>
	</article>
</div>