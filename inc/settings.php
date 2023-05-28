<?php

/**
 * Typography Settings
 * @version 0.6.1
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @package RebootProject
 */
function integer_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    // Rounded Corners.
    $wp_customize->add_setting('rounded_logo', array(
        'default' => 1,
        'sanitize_callback' => 'integer_sanitize_checkbox',
    ));

    $wp_customize->add_control('rounded_logo', array(
        'type' => 'checkbox',
        'label' => __('Use rounded corners', 'integer'),
        'section' => 'title_tagline',
        'priority' => 8,
    ));

    // Gravatar as Site logo.
    $wp_customize->add_setting('use_gravatar_as_logo', array(
        'default' => 0,
        'sanitize_callback' => 'integer_sanitize_checkbox',
    ));

    $wp_customize->add_control('use_gravatar_as_logo', array(
        'type' => 'checkbox',
        'label' => __('Use Gravatar as Logo', 'integer'),
        'section' => 'title_tagline',
        // Translators: placeholder shows the site admin email.
        'description' => sprintf(__('Use your gravatar associated with <strong>%s</strong> as a site logo image. This will override the logo set manually.', 'integer'), esc_html(get_bloginfo('admin_email'))) . '<br />' . sprintf('<a href="%s" target="_blank">%s</a>', esc_url(__('https://en.gravatar.com/support/what-is-gravatar/', 'integer')), __('What is Gravatar?', 'integer')),
        'priority' => 9,
    ));
}
add_action('customize_register', 'integer_customize_register');

/**
 * Sanitizes checkbox.
 *
 * @param string|int $input Potentially harmful data.
 */
function integer_sanitize_checkbox($input)
{
    return 1 == $input ? 1 : 0;
}
