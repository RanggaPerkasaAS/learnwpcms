<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'tastypress_reset_section', array(
	'title'             => esc_html__('Reset all settings','tastypress'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'tastypress' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'tastypress_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'tastypress_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'tastypress_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'tastypress' ),
	'section'           => 'tastypress_reset_section',
	'type'              => 'checkbox',
) );
