<?php

/**
 * Social Settings
 * @version 0.6.5
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @package rebootproject
 */

function rbpj_social($wp_customize)
{
	// Extra Features.
	$wp_customize->add_section('social', array(
		'title' => __('Redes Sociales', 'rebootproject'),
		'priority' => 500,
		'description' => __('Redes sociales de tu organizacion.', 'rebootproject'),
	));

	$wp_customize->add_setting('rbpj_facebook', array(
		'default'           => 'https://www.facebook.com/rebootprojectmx/',
		// 'sanitize_callback' => 'sanitize_text'
	));

	$wp_customize->add_control('rbpj_facebook', array(
		'type' => 'text',
		'label' => __('Facebook', 'rebootproject'),
		'section' => 'social',
		'description' => sprintf(__('Pega la url completa de tu perfil de facebook', 'integer')),
	));
}

add_action('customize_register', 'rbpj_social');
