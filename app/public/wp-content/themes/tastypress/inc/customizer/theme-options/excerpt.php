<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'tastypress_excerpt_section', array(
	'title'             => esc_html__( 'Excerpt','tastypress' ),
	'description'       => esc_html__( 'Excerpt section options.', 'tastypress' ),
	'panel'             => 'tastypress_theme_options_panel',
) );


// long Excerpt length setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[long_excerpt_length]', array(
	'sanitize_callback' => 'tastypress_sanitize_number_range',
	'validate_callback' => 'tastypress_validate_long_excerpt',
	'default'			=> $options['long_excerpt_length'],
) );

$wp_customize->add_control( 'tastypress_theme_options[long_excerpt_length]', array(
	'label'       		=> esc_html__( 'Blog Page Excerpt Length', 'tastypress' ),
	'description' 		=> esc_html__( 'Total words to be displayed in archive page/search page.', 'tastypress' ),
	'section'     		=> 'tastypress_excerpt_section',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
	),
) );
