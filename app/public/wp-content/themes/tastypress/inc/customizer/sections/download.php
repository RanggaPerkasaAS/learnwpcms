<?php
/**
 * download Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add download section
$wp_customize->add_section( 'tastypress_download_section', array(
	'title'             => esc_html__( 'Download','tastypress' ),
	'description'       => esc_html__( 'Download Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// download Section enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[download_section_enable]', array(
	'default'			=> 	$options['download_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[download_section_enable]', array(
	'label'             => esc_html__( 'download Section Enable', 'tastypress' ),
	'section'           => 'tastypress_download_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[download_section_enable]', array(
		'selector'            => '#download .tooltiptext',
		'settings'            => 'tastypress_theme_options[download_section_enable]',
    ) );
}

// download sub title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[download_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['download_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[download_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_download_section',
	'active_callback' 	=> 'tastypress_is_download_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[download_sub_title]', array(
		'selector'            => '#download p.section-subtitle',
		'settings'            => 'tastypress_theme_options[download_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_download_sub_title_partial',
    ) );
}


// download pages drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[download_content_page]', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[download_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'tastypress' ),
	'section'           => 'tastypress_download_section',
	'choices'			=> tastypress_page_choices(),
	'active_callback' 	=> 'tastypress_is_download_section_enable',
) ) );


// download btn title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[download_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['download_btn_title'],
	'transport'			=> 'postMessage',
	) );
	
	$wp_customize->add_control( 'tastypress_theme_options[download_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'tastypress' ),
	'section'        	=> 'tastypress_download_section',
	'active_callback' 	=> 'tastypress_is_download_section_enable',
	'type'				=> 'text',
	) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[download_btn_title]', array(
		'selector'            => '#download div.read-more a',
		'settings'            => 'tastypress_theme_options[download_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_download_btn_title_partial',
		) );
	}


