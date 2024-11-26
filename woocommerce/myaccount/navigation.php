<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package rebootproject
 * @version 0.7.5
 */

if (! defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_account_navigation');
?>

<div class="dropdown mb-3" aria-label="<?php esc_html_e('Account pages', 'woocommerce'); ?>">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
		Mi cuenta
	</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenuAccount">
		<?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?> dropdown-item">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" <?php echo wc_is_current_account_menu_item($endpoint) ? 'aria-current="page"' : ''; ?>>
					<?php echo esc_html($label); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<?php do_action('woocommerce_after_account_navigation'); ?>