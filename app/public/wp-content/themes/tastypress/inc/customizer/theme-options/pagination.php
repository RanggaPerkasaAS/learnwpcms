<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'tastypress_pagination', array(
	'title'               => esc_html__('Pagination','tastypress'),
	'description'         => esc_html__( 'Pagination section options.', 'tastypress' ),
	'panel'               => 'tastypress_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'tastypress' ),
	'section'             => 'tastypress_pagination',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'tastypress_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'tastypress_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'tastypress' ),
	'section'             => 'tastypress_pagination',
	'type'                => 'select',
	'choices'			  => tastypress_pagination_options(),
	'active_callback'	  => 'tastypress_is_pagination_enable',
) );
