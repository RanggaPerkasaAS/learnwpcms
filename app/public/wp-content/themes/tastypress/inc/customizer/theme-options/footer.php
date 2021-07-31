<?php
/**
 * Footer options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

// Footer Section
$wp_customize->add_section( 'tastypress_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'tastypress' ),
		'priority'   			=> 900,
		'panel'      			=> 'tastypress_theme_options_panel',
	)
);


// footer text
$wp_customize->add_setting( 'tastypress_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'tastypress_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'tastypress_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'tastypress' ),
		'section'    			=> 'tastypress_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'tastypress_theme_options[copyright_text]', array(
		'selector'            => '.site-info span.copyright',
		'settings'            => 'tastypress_theme_options[copyright_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'tastypress_copyright_text_partial',
    ) );
}


// scroll top visible
$wp_customize->add_setting( 'tastypress_theme_options[scroll_top_visible]',
	array(
		'default'       		=> $options['scroll_top_visible'],
		'sanitize_callback' => 'tastypress_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Tastypress_Switch_Control( $wp_customize, 'tastypress_theme_options[scroll_top_visible]',
    array(
		'label'      			=> esc_html__( 'Display Scroll Top Button', 'tastypress' ),
		'section'    			=> 'tastypress_section_footer',
		'on_off_label' 		=> tastypress_switch_options(),
    )
) );
