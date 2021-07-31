<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

$wp_customize->add_section( 'tastypress_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','tastypress' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'tastypress' ),
	'panel'             => 'tastypress_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'tastypress' ),
	'section'          	=> 'tastypress_breadcrumb',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'tastypress_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'tastypress' ),
	'active_callback' 	=> 'tastypress_is_breadcrumb_enable',
	'section'          	=> 'tastypress_breadcrumb',
) );
