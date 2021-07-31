<?php
/**
 * Menu options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'tastypress_menu', array(
	'title'             => esc_html__('Header Menu','tastypress'),
	'description'       => esc_html__( 'Header Menu options.', 'tastypress' ),
	'panel'             => 'nav_menus',
) );

$wp_customize->add_setting( 'tastypress_theme_options[search_icon_in_primary_menu_enable]', array(
	'default'			=> 	$options['search_icon_in_primary_menu_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[search_icon_in_primary_menu_enable]', array(
	'label'             => esc_html__( 'Enable Search Icon', 'tastypress' ),
	'description'       => esc_html__( 'Add Search Icon in Last of primary menu', 'tastypress' ),
	'section'           => 'tastypress_menu',
	'on_off_label' 		=> tastypress_switch_options(),

) ) );

$wp_customize->add_setting( 'tastypress_theme_options[cart_menu_enable]', array(
	'default'			=> 	$options['cart_menu_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[cart_menu_enable]', array(
	'label'             => esc_html__( 'Enable Cart Icon', 'tastypress' ),
	'description'       => esc_html__( 'Add Search Icon in Last of primary menu', 'tastypress' ),
	'section'           => 'tastypress_menu',
	'on_off_label' 		=> tastypress_switch_options(),

) ) );


$wp_customize->add_setting( 'tastypress_theme_options[header_menu_btn_link]', array(
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( 'tastypress_theme_options[header_menu_btn_link]', array(
	'label'           	=> esc_html__( 'Button Url', 'tastypress' ),
	'section'        	=> 'tastypress_menu',
	'type'				=> 'url',
) );

$wp_customize->add_setting( 'tastypress_theme_options[menu_btn_label]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['menu_btn_label'],
) );

$wp_customize->add_control( 'tastypress_theme_options[menu_btn_label]', array(
	'label'           	=> esc_html__( 'Title', 'tastypress' ),
	'section'        	=> 'tastypress_menu',
	'type'				=> 'text',
) );