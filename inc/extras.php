<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package rebootproject
 * @version 0.6.5
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function integer_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add index class.
	if ( integer_is_blog() || is_archive() || is_search() ) {
		$classes[] = 'index';
	}

	// Add class if the site title and tagline is hidden.
	if ( 0 == get_theme_mod( 'header_text', 1 ) ) {
		$classes[] = 'title-tagline-hidden';
	}

	// Add sticky header class if it is enabled.
	if ( get_theme_mod( 'sticky_header', 1 ) ) {
		$classes[] = 'sticky-header';
	}

	return $classes;
}
add_filter( 'body_class', 'integer_body_classes' );

/**
 * Detects blog index page.
 */
function integer_is_blog() {
	if ( is_front_page() && is_home() ) {
		return true;
	} elseif ( is_front_page() ) {
		return false;
	} elseif ( is_home() ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Outputs the grid class.
 */
function integer_grid_class() {
	if ( 'grid' == get_theme_mod( 'blog_layout' ) ) {
		echo 'grid';
	} else {
		echo 'column';
	}
}

/**
 * Better excerpt.
 *
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @param string $link Excerpt link.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function integer_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Leer artículo<span class="screen-reader-text"> "%s"</span>', 'integer' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'integer_excerpt_more' );

/**
 * Filters the_category() to output HTML5 valid rel tag.
 *
 * @param string $text markup containing list of categories.
 */
function integer_category_rel( $text ) {
	$search  = array( 'rel="category"', 'rel="category tag"' );
	$replace = 'rel="tag"';
	$text    = str_replace( $search, $replace, $text );
	return $text;
}
add_filter( 'the_category', 'integer_category_rel' );

/**
 * Update maximum srcset image width.
 *
 * @param int $max_width Maximum allowed image width.
 */
function integer_remove_max_srcset_image_width( $max_width ) {
	return 2880;
}
add_filter( 'max_srcset_image_width', 'integer_remove_max_srcset_image_width' );


/**
 * Add image sizes registered with the theme to Media Library select.
 *
 * @param array $sizes Image sizes.
 */
function integer_add_image_sizes_to_media_library_select( $sizes ) {
	return array_merge( $sizes, array(
		'integer-blog-thumbnail' => _x( 'Integer Thumbnail', 'Do not translate "Integer". It\'s a theme name.', 'integer' ),
		'integer-blog-thumbnail-2x' => _x( 'Integer Thumbnail 2x', 'Do not translate "Integer". It\'s a theme name.', 'integer' ),
	) );
}
add_filter( 'image_size_names_choose', 'integer_add_image_sizes_to_media_library_select' );

/**
 * Add SVG sprite to the footer.
 */
function integer_include_svg_sprite() {
	// Define SVG sprite file.
	$svg_sprite = get_parent_theme_file_path( '/assets/images/svg-sprite.svg' );

	// If it exists, include it.
	if ( file_exists( $svg_sprite ) ) {
		require_once( $svg_sprite );
	}
}
add_action( 'wp_footer', 'integer_include_svg_sprite', 9999 );


/**
 * Adds class to all menu items.
 *
 * @param  array   $classes Current menu item classes.
 * @param  WP_Post $item    The current menu item.
 * @param  object  $args    Menu item args.
 * @return array            Menu item classes with a new class.
 */
function integer_menu_item_classes( $classes, $item, $args ) {
	if ( 'primary' === $args->theme_location ) {
		$classes[] = 'primary-menu__list-item';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'integer_menu_item_classes', 10, 3 );


/**
 * Title and dropdown arrow in menu items with childs
 *
 * @version 0.6.5
 * @param  string  $title The menu item's title.
 * @param  WP_Post $item  The current menu item.
 * @param  array   $args  An array of wp_nav_menu() arguments.
 * @param  int     $depth Depth of menu item. Used for padding.
 * @return string  $title The menu item's title with dropdown icon.
 */
function rbpj_dropdown_icon_to_menu_link( $title, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		foreach ( $item->classes as $value ) {
			if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
				$title = $title . '<span style="color:white" class="dashicons dashicons-arrow-down-alt2"></span>';
			}
		}
	}

	return $title;
}
add_filter( 'nav_menu_item_title', 'rbpj_dropdown_icon_to_menu_link', 10, 4 );