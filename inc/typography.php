<?php

/**
 * Typography Settings
 * @version 0.6.1
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @package RebootProject
 */

function rbpj_typography($wp_customize)
{

	// Extra Features.
	$wp_customize->add_section('typography', array(
		'title' => __('Typography', 'integer'),
		'priority' => 300,
		'description' => __('We are taking all typographies from Google Fonts®.', 'integer'),
	));

	$wp_customize->add_setting('rbpj_primary_typography', array(
		'default'           => 'Inconsolata',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_primary_typography', array(
		'type' => 'text',
		'label' => __('Primary Font', 'integer'),
		'section' => 'typography',
		'description' => sprintf(__('Used in all Headers (H1,H2,H3,.. H6)', 'integer')),
	));

	$wp_customize->add_setting('rbpj_secondary_typography', array(
		'default'           => 'Inconsolata',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_secondary_typography', array(
		'type' => 'text',
		'label' => __('Secondary Font', 'integer'),
		'section' => 'typography',
		'description' => sprintf(__('Used in all content', 'integer')),
	));
}

add_action('customize_register', 'rbpj_typography');
