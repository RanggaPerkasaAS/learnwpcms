<?php
/**
 * Core file.
 *
 * This is the template that includes all the other files for core featured of Theme Palace
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */


/**
 * Include options function.
 */
require get_template_directory() . '/inc/options.php';


// Load customizer defaults values
require get_template_directory() . '/inc/customizer/defaults.php';


/**
 * Merge values from default options array and values from customizer
 *
 * @return array Values returned from customizer
 * @since tastypress 1.0.0
 */
function tastypress_get_theme_options() {
  $tastypress_default_options = tastypress_get_default_theme_options();

  return array_merge( $tastypress_default_options , get_theme_mod( 'tastypress_theme_options', $tastypress_default_options ) ) ;
}


/**
 * Load admin custom styles
 * 
 */
function tastypress_load_admin_style() {
    wp_register_style( 'tastypress_admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'tastypress_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'tastypress_load_admin_style' );

/**
 * Add breadcrumb functions.
 */
require get_template_directory() . '/inc/breadcrumb-class.php';

/**
 * Add helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Add structural hooks.
 */
require get_template_directory() . '/inc/structure.php';

/**
 * Add meta box
 */
require get_template_directory() . '/inc/metabox.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/sections/sections.php';

if ( class_exists( 'WooCommerce' ) ) {
    /**
     * Woocommerce
     */
    require get_template_directory() . '/inc/woocommerce.php';
}

/**
* TGM plugin additions.
*/
require get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';

if ( class_exists( 'CatchThemesDemoImportPlugin' ) ) {
    /**
    * CT plugin demo importer compatibility.
    */
    require get_template_directory() . '/inc/demo-import.php';
}

if ( ! function_exists( 'tastypress_category_title' ) ) :

function tastypress_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'tastypress_category_title' );

endif;