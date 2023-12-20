<?php

/**
 * The template used for displaying post content in single.php.
 * @version 0.6.5
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package rebootproject
 */
get_header()
?>

<div class="container">
	<?php if (get_post_type() != "product") {  ?>
		<div class="row">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
		</div>
	<?php }  ?>
</div>

<div class="container">
	<article>
		<?php the_title('<h1>', '</h1>'); ?>
		<?php the_content(); ?>
	</article>
</div>