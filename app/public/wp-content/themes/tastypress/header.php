<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 * @subpackage tastypress
	 * @since tastypress 1.0.0
	 */

	/**
	 * tastypress_doctype hook
	 *
	 * @hooked tastypress_doctype -  10
	 *
	 */
	do_action( 'tastypress_doctype' );

?>
<head>
<?php
	/**
	 * tastypress_before_wp_head hook
	 *
	 * @hooked tastypress_head -  10
	 *
	 */
	do_action( 'tastypress_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<?php 
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
?>

<?php
	/**
	 * tastypress_page_start_action hook
	 *
	 * @hooked tastypress_page_start -  10
	 *
	 */
	do_action( 'tastypress_page_start_action' ); 

	/**
	 * tastypress_loader_action hook
	 *
	 * @hooked tastypress_loader -  10
	 *
	 */
	do_action( 'tastypress_before_header' );

	/**
	 * tastypress_header_action hook
	 *
	 * @hooked tastypress_header_start -  10
	 * @hooked tastypress_site_branding -  20
	 * @hooked tastypress_site_navigation -  30
	 * @hooked tastypress_header_end -  50
	 *
	 */
	do_action( 'tastypress_header_action' );

	/**
	 * tastypress_content_start_action hook
	 *
	 * @hooked tastypress_content_start -  10
	 *
	 */
	do_action( 'tastypress_content_start_action' );

	/**
	 * tastypress_header_image_action hook
	 *
	 * @hooked tastypress_header_image -  10
	 *
	 */
	do_action( 'tastypress_header_image_action' );

    if ( tastypress_is_frontpage() ) {
    	$options = tastypress_get_theme_options();
    	$sorted = array();
    	if ( ! empty( $options['sortable'] ) ) {
			$sorted = explode( ',' , $options['sortable'] );
		}

		foreach ( $sorted as $section ) {
			add_action( 'tastypress_primary_content', 'tastypress_add_'. $section .'_section' );
		}
		do_action( 'tastypress_primary_content' );
	}