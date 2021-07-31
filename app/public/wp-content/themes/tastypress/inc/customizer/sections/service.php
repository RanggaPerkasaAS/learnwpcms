<?php
/**
 * Service Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add Service section
$wp_customize->add_section( 'tastypress_service_section', array(
	'title'             => esc_html__( 'Services','tastypress' ),
	'description'       => esc_html__( 'Services Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// Service content enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[service_section_enable]', array(
	'default'			=> 	$options['service_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[service_section_enable]', array(
	'label'             => esc_html__( 'Service Section Enable', 'tastypress' ),
	'section'           => 'tastypress_service_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );


if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[service_section_enable]', array(
		'selector'            => '#our-services .tooltiptext',
		'settings'            => 'tastypress_theme_options[service_section_enable]',
    ) );
}


// service title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[service_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['service_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[service_title]', array(
	'label'           	=> esc_html__( 'Title', 'tastypress' ),
	'section'        	=> 'tastypress_service_section',
	'type'				=> 'text',
	'active_callback' 	=> 'tastypress_is_service_section_enable',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[service_title]', array(
		'selector'            => '#our-services h2.section-title',
		'settings'            => 'tastypress_theme_options[service_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_service_title_partial',
    ) );
}


// service title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[service_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['service_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[service_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_service_section',
	'type'				=> 'text',
	'active_callback' 	=> 'tastypress_is_service_section_enable',
) );



// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[service_sub_title]', array(
		'selector'            => '#our-services p.section-subtitle',
		'settings'            => 'tastypress_theme_options[service_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_service_sub_title_partial',
    ) );
}



for ( $i = 1; $i <= 3; $i++ ) :

	// service pages drop down chooser control and setting
$wp_customize->add_setting( 'tastypress_theme_options[service_content_page_' . $i . ']', array(
	'sanitize_callback' => 'tastypress_sanitize_page',
	) );

$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[service_content_page_' . $i . ']', array(
	'label'             => sprintf( esc_html__( 'Select Page %d', 'tastypress' ), $i ),
	'section'           => 'tastypress_service_section',
	'choices'			=> tastypress_page_choices(),
	'active_callback' 	=> 'tastypress_is_service_section_enable',
	) ) );

endfor;

