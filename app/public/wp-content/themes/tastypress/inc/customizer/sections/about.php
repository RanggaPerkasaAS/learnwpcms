<?php
/**
 * about Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add about section
$wp_customize->add_section( 'tastypress_about_section', array(
	'title'             => esc_html__( 'About','tastypress' ),
	'description'       => esc_html__( 'About Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// about Section enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[about_section_enable]', array(
	'default'			=> 	$options['about_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[about_section_enable]', array(
	'label'             => esc_html__( 'about Section Enable', 'tastypress' ),
	'section'           => 'tastypress_about_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[about_section_enable]', array(
		'selector'            => '#about-us .tooltiptext',
		'settings'            => 'tastypress_theme_options[about_section_enable]',
    ) );
}

// about sub title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[about_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[about_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_about_section',
	'active_callback' 	=> 'tastypress_is_about_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[about_sub_title]', array(
		'selector'            => '#about-us p.section-subtitle',
		'settings'            => 'tastypress_theme_options[about_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_about_sub_title_partial',
    ) );
}

// about content type control and setting
$wp_customize->add_setting( 'tastypress_theme_options[about_content_type]', array(
	'default'          	=> $options['about_content_type'],
	'sanitize_callback' => 'tastypress_sanitize_select',
) );

$wp_customize->add_control( 'tastypress_theme_options[about_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'tastypress' ),
	'section'           => 'tastypress_about_section',
	'type'				=> 'select',
	'active_callback' 	=> 'tastypress_is_about_section_enable',
	'choices'			=> tastypress_about_content_type(),
) );

// about pages drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[about_content_page]', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[about_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'tastypress' ),
	'section'           => 'tastypress_about_section',
	'choices'			=> tastypress_page_choices(),
	'active_callback'	=> 'tastypress_is_about_section_content_page_enable',
) ) );

// about posts drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[about_content_product]', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[about_content_product]', array(
	'label'             => esc_html__( 'Select Product', 'tastypress' ),
	'section'           => 'tastypress_about_section',
	'choices'			=> tastypress_product_choices(),
	'active_callback'	=> 'tastypress_is_about_section_content_product_enable',
) ) );


// about btn title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[about_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_btn_title'],
	'transport'			=> 'postMessage',
	) );
	
	$wp_customize->add_control( 'tastypress_theme_options[about_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'tastypress' ),
	'section'        	=> 'tastypress_about_section',
	'active_callback' 	=> 'tastypress_is_about_section_enable',
	'type'				=> 'text',
	) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[about_btn_title]', array(
		'selector'            => '#about-us div.read-more a',
		'settings'            => 'tastypress_theme_options[about_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_about_btn_title_partial',
		) );
	}


