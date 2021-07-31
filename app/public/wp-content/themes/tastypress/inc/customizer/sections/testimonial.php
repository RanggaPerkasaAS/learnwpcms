<?php
/**
 * Testimonial Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add Testimonial section
$wp_customize->add_section( 'tastypress_testimonial_section', array(
	'title'             => esc_html__( 'Testimonial','tastypress' ),
	'description'       => esc_html__( 'Testimonial Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// Testimonial content enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[testimonial_section_enable]', array(
	'default'			=> 	$options['testimonial_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[testimonial_section_enable]', array(
	'label'             => esc_html__( 'Testimonial Section Enable', 'tastypress' ),
	'section'           => 'tastypress_testimonial_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[testimonial_section_enable]', array(
		'selector'            => '#testimonial .wrapper',
		'settings'            => 'tastypress_theme_options[testimonial_section_enable]',
    ) );
}

$wp_customize->add_setting( 'tastypress_theme_options[testimonial_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['testimonial_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[testimonial_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_testimonial_section',
	'active_callback' 	=> 'tastypress_is_testimonial_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[testimonial_sub_title]', array(
		'selector'            => '#testimonial p.section-subtitle',
		'settings'            => 'tastypress_theme_options[testimonial_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_testimonial_sub_title_partial',
    ) );
}

// testimonial title setting and control
$wp_customize->add_setting( 'tastypress_theme_options[testimonial_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['testimonial_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[testimonial_title]', array(
	'label'           	=> esc_html__( 'Title', 'tastypress' ),
	'section'        	=> 'tastypress_testimonial_section',
	'active_callback' 	=> 'tastypress_is_testimonial_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[testimonial_title]', array(
		'selector'            => '#testimonial .section-header h2.section-title',
		'settings'            => 'tastypress_theme_options[testimonial_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_testimonial_title_partial',
    ) );
}

// testimonial title setting and control


for ( $i = 1; $i <= $options['testimonial_count']; $i++ ) :
	// testimonial pages drop down chooser control and setting
	$wp_customize->add_setting( 'tastypress_theme_options[testimonial_content_page_' . $i . ']', array(
		'sanitize_callback' => 'tastypress_sanitize_page',
	) );

	$wp_customize->add_control( new Tastypress_Dropdown_Chooser( $wp_customize, 'tastypress_theme_options[testimonial_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'tastypress' ), $i ),
		'section'           => 'tastypress_testimonial_section',
		'choices'			=> tastypress_page_choices(),
		'active_callback' 	=> 'tastypress_is_testimonial_section_enable',
	) ) );

	$wp_customize->add_setting( 'tastypress_theme_options[testimonial_position_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',

	) );

	$wp_customize->add_control( 'tastypress_theme_options[testimonial_position_' . $i . ']', array(
		'label'           	=> esc_html__( 'Position ', 'tastypress' ). $i,
		'section'        	=> 'tastypress_testimonial_section',
		'active_callback' 	=> 'tastypress_is_testimonial_section_enable',
		'type'				=> 'text',
	) );

endfor;

