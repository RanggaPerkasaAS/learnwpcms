<?php
/**
 * hero Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add hero section
$wp_customize->add_section( 'tastypress_hero_section', array(
	'title'             => esc_html__( 'Hero','tastypress' ),
	'description'       => esc_html__( 'Hero Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// hero Section enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[hero_section_enable]', array(
	'default'			=> 	$options['hero_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[hero_section_enable]', array(
	'label'             => esc_html__( 'hero Section Enable', 'tastypress' ),
	'section'           => 'tastypress_hero_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[hero_section_enable]', array(
		'selector'            => '#hero-section .tooltiptext',
		'settings'            => 'tastypress_theme_options[hero_section_enable]',
    ) );
}


// long Excerpt length setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[hero_excerpt_length]', array(
	'sanitize_callback' => 'tastypress_sanitize_number_range',
	'validate_callback' => 'tastypress_validate_long_excerpt',
	'default'			=> $options['hero_excerpt_length'],
) );

$wp_customize->add_control( 'tastypress_theme_options[hero_excerpt_length]', array(
	'label'       		=> esc_html__( 'hero Excerpt Length', 'tastypress' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in hero posts.', 'tastypress' ),
	'section'     		=> 'tastypress_hero_section',
	'active_callback' 	=> 'tastypress_is_hero_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
	),
) );


// hero pages drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[hero_content_page]', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[hero_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'tastypress' ),
	'section'           => 'tastypress_hero_section',
	'choices'			=> tastypress_page_choices(),
) ) );


// hero btn title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[hero_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['hero_btn_title'],
	'transport'			=> 'postMessage',
	) );
	
$wp_customize->add_control( 'tastypress_theme_options[hero_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'tastypress' ),
	'section'        	=> 'tastypress_hero_section',
	'active_callback' 	=> 'tastypress_is_hero_section_enable',
	'type'				=> 'text',
	) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[hero_btn_title]', array(
		'selector'            => '#hero-section div.read-more a',
		'settings'            => 'tastypress_theme_options[hero_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_hero_btn_title_partial',
		) );
	}

