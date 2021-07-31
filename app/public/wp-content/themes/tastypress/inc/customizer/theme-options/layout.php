<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'tastypress_layout', array(
	'title'               => esc_html__('Layout','tastypress'),
	'description'         => esc_html__( 'Layout section options.', 'tastypress' ),
	'panel'               => 'tastypress_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[site_layout]', array(
	'sanitize_callback'   => 'tastypress_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Tastypress_Custom_Radio_Image_Control ( $wp_customize, 'tastypress_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'tastypress' ),
	'section'             => 'tastypress_layout',
	'choices'			  => tastypress_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'tastypress_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Tastypress_Custom_Radio_Image_Control ( $wp_customize, 'tastypress_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'tastypress' ),
	'section'             => 'tastypress_layout',
	'choices'			  => tastypress_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'tastypress_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Tastypress_Custom_Radio_Image_Control ( $wp_customize, 'tastypress_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'tastypress' ),
	'section'             => 'tastypress_layout',
	'choices'			  => tastypress_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'tastypress_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Tastypress_Custom_Radio_Image_Control( $wp_customize, 'tastypress_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'tastypress' ),
	'section'             => 'tastypress_layout',
	'choices'			  => tastypress_sidebar_position(),
) ) );