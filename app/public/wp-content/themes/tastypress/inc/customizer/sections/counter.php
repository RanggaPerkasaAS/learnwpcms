<?php
/**
 * Counter Section options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add Counter section
$wp_customize->add_section( 'tastypress_counter_section', array(
	'title'             => esc_html__( 'Counters','tastypress' ),
	'description'       => esc_html__( 'Counters Section options.', 'tastypress' ),
	'panel'             => 'tastypress_front_page_panel',
) );

// Counter content enable control and setting
$wp_customize->add_setting( 'tastypress_theme_options[counter_section_enable]', array(
	'default'			=> 	$options['counter_section_enable'],
	'sanitize_callback' => 'tastypress_sanitize_switch_control',
) );

$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[counter_section_enable]', array(
	'label'             => esc_html__( 'Counter Section Enable', 'tastypress' ),
	'section'           => 'tastypress_counter_section',
	'on_off_label' 		=> tastypress_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[counter_section_enable]', array(
		'selector'            => '#counter .tooltiptext',
		'settings'            => 'tastypress_theme_options[counter_section_enable]',
    ) );
}

if( in_array( $options['home_layout'], array( 'default-design-all', 'default-design', 'fourth-design', 'sixth-design' ) ) ):

// Counter sub title control and setting
$wp_customize->add_setting( 'tastypress_theme_options[counter_sub_title]', array(
    'default'           => $options['counter_sub_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage'
) );

$wp_customize->add_control( 'tastypress_theme_options[counter_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'tastypress' ),
	'section'        	=> 'tastypress_counter_section',
	'active_callback' 	=> 'tastypress_is_counter_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[counter_sub_title]', array(
		'selector'            => '#counter p.section-subtitle',
		'settings'            => 'tastypress_theme_options[counter_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_counter_sub_title_partial',
    ) );
}

// Counter sub title control and setting
$wp_customize->add_setting( 'tastypress_theme_options[counter_title]', array(
    'default'           => $options['counter_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage'
) );

$wp_customize->add_control( 'tastypress_theme_options[counter_title]', array(
	'label'           	=> esc_html__( 'Title', 'tastypress' ),
	'section'        	=> 'tastypress_counter_section',
	'active_callback' 	=> 'tastypress_is_counter_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[counter_title]', array(
		'selector'            => '#counter h2.section-title',
		'settings'            => 'tastypress_theme_options[counter_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_counter_title_partial',
    ) );
}

endif;


for ( $i = 1; $i <= 3; $i++ ) :

	// counter title setting and control
	$wp_customize->add_setting( 'tastypress_theme_options[counter_title_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'tastypress_theme_options[counter_title_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Counter Title %d', 'tastypress' ), $i ),
		'section'        	=> 'tastypress_counter_section',
		'active_callback' 	=> 'tastypress_is_counter_section_enable',
		'type'				=> 'text',
	) );

	// counter title setting and control
	$wp_customize->add_setting( 'tastypress_theme_options[counter_number_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'tastypress_theme_options[counter_number_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Counter Count %d', 'tastypress' ), $i ),
		'section'        	=> 'tastypress_counter_section',
		'active_callback' 	=> 'tastypress_is_counter_section_enable',
		'type'				=> 'text',
	) );

	// counter hr setting and control
	$wp_customize->add_setting( 'tastypress_theme_options[counter_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Tastypress_Customize_Horizontal_Line( $wp_customize, 'tastypress_theme_options[counter_hr_'. $i .']',
		array(
			'section'         => 'tastypress_counter_section',
			'active_callback' => 'tastypress_is_counter_section_enable',
			'type'			  => 'hr'
	) ) );
endfor;
