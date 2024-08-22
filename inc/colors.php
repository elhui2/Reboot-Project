<?php

/**
 * Typography Settings
 * @version 0.7.0
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @package RebootProject
 */

function rbpj_colors($wp_customize)
{

	// Extra Features.
	$wp_customize->add_section('colors', array(
		'title' => __('Colors', 'integer'),
		'priority' => 400,
		'description' => __('Colors of the Website.', 'integer'),
	));

	$wp_customize->add_setting('rbpj_primary_background', array(
		'default'           => '#000000',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_primary_background', array(
		'type' => 'text',
		'label' => __('Primary Background Color', 'integer'),
		'section' => 'colors',
		'description' => sprintf(__('Background Color of menu and footer', 'integer')),
	));

	$wp_customize->add_setting('rbpj_headers_color', array(
		'default'           => '#ea831c',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_headers_color', array(
		'type' => 'text',
		'label' => __('Headers Color', 'integer'),
		'section' => 'colors',
		'description' => sprintf(__('Used in all Headers (H1,H2,H3,.. H6)', 'integer')),
	));

	$wp_customize->add_setting('rbpj_links_color', array(
		'default'           => '#ea831c',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_links_color', array(
		'type' => 'text',
		'label' => __('Links Color', 'integer'),
		'section' => 'colors',
		'description' => sprintf(__('Used in all <a> tags', 'integer')),
	));

	$wp_customize->add_setting('rbpj_buttons_color', array(
		'default'           => '#ea831c',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_buttons_color', array(
		'type' => 'text',
		'label' => __('Buttons Color', 'integer'),
		'section' => 'colors',
		'description' => sprintf(__('Used in default buttons', 'integer')),
	));
}

add_action('customize_register', 'rbpj_colors');
