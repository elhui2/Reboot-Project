<?php

/**
 * The default template used for displaying post content in index.php
 * @version 0.4
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row blogroll-item'); ?>>

	<div class="col-sm-10 offset-md-1">
		<a href="<?php echo esc_url(get_permalink()) ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%"></a>
		<?php the_title(sprintf('<h2 class="blogroll-item__title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		<?php //integer_entry_meta_index(); 
		?>
		<?php
		// Translators: %s is the title of the post.
		the_excerpt(sprintf(__('Continue reading %s', 'integer'), the_title('<span class="screen-reader-text">"', '"</span>', false)));
		?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __('Pages:', 'integer'),
				'after' => '</div>',
			)
		);
		?>

	</div>
</article>