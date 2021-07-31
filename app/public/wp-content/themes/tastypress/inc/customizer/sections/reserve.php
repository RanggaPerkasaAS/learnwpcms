<?php
/**
 * reserve Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add reserve section
$wp_customize->add_section( 'tastypress_reserve_section', array(
	'title'             => esc_html__( 'Reserve','tastypress' ),
	'description'       => esc_html__( 'Reserve Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// reserve Section enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[reserve_section_enable]', array(
	'default'			=> 	$options['reserve_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[reserve_section_enable]', array(
	'label'             => esc_html__( 'reserve Section Enable', 'tastypress' ),
	'section'           => 'tastypress_reserve_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[reserve_section_enable]', array(
		'selector'            => '#reserve .tooltiptext',
		'settings'            => 'tastypress_theme_options[reserve_section_enable]',
    ) );
}

// reserve sub title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[reserve_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['reserve_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[reserve_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_reserve_section',
	'active_callback' 	=> 'tastypress_is_reserve_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[reserve_sub_title]', array(
		'selector'            => '#reserve p.section-subtitle',
		'settings'            => 'tastypress_theme_options[reserve_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_reserve_sub_title_partial',
    ) );
}

// reserve pages drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[reserve_content_page]', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[reserve_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'tastypress' ),
	'section'           => 'tastypress_reserve_section',
	'choices'			=> tastypress_page_choices(),
	'active_callback' 	=> 'tastypress_is_reserve_section_enable',
) ) );


// reserve btn title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[reserve_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['reserve_btn_title'],
	'transport'			=> 'postMessage',
	) );
	
	$wp_customize->add_control( 'tastypress_theme_options[reserve_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'tastypress' ),
	'section'        	=> 'tastypress_reserve_section',
	'active_callback' 	=> 'tastypress_is_reserve_section_enable',
	'type'				=> 'text',
	) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[reserve_btn_title]', array(
		'selector'            => '#reserve div.read-more a',
		'settings'            => 'tastypress_theme_options[reserve_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_reserve_btn_title_partial',
		) );
	}





