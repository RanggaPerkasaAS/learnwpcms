<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function tastypress_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'tastypress' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function tastypress_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'tastypress' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}


function tastypress_product_choices() {
    $full_product_list = array();
    $product_id = array();
    $loop = new WP_Query(array('post_type' => array('product', 'product_variation'), 'posts_per_page' => -1));
    while ($loop->have_posts()) : $loop->the_post();
        $product_id[] = get_the_id();
    endwhile;
    wp_reset_postdata();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'tastypress' );
    foreach ( $product_id  as $id ) {
        $choices[ $id ] = get_the_title( $id );
    }
    return  $choices;
}


if ( ! function_exists( 'tastypress_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function tastypress_selected_sidebar() {
        $tastypress_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'tastypress' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'tastypress' ),
            'optional-sidebar-2'    => esc_html__( 'Optional Sidebar 2', 'tastypress' ),
            'optional-sidebar-3'    => esc_html__( 'Optional Sidebar 3', 'tastypress' ),
            'optional-sidebar-4'    => esc_html__( 'Optional Sidebar 4', 'tastypress' ),
        );

        $output = apply_filters( 'tastypress_selected_sidebar', $tastypress_selected_sidebar );

        return $output;
    }
endif;

if ( ! function_exists( 'tastypress_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function tastypress_site_layout() {
        $tastypress_site_layout = array(
            'wide-layout'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
            'frame-layout' => get_template_directory_uri() . '/assets/images/framed.png',
        );

        $output = apply_filters( 'tastypress_site_layout', $tastypress_site_layout );
        return $output;
    }
endif;


if ( ! function_exists( 'tastypress_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function tastypress_global_sidebar_position() {
        $tastypress_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'tastypress_global_sidebar_position', $tastypress_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'tastypress_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function tastypress_sidebar_position() {
        $tastypress_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
            'no-sidebar-content'   => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'tastypress_sidebar_position', $tastypress_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'tastypress_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function tastypress_pagination_options() {
        $tastypress_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'tastypress' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'tastypress' ),
        );

        $output = apply_filters( 'tastypress_pagination_options', $tastypress_pagination_options );

        return $output;
    }
endif;


if ( ! function_exists( 'tastypress_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function tastypress_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'tastypress' ),
            'off'       => esc_html__( 'Disable', 'tastypress' )
        );
        return apply_filters( 'tastypress_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'tastypress_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function tastypress_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'tastypress' ),
            'off'       => esc_html__( 'No', 'tastypress' )
        );
        return apply_filters( 'tastypress_hide_options', $arr );
    }
endif;

if ( ! function_exists( 'tastypress_about_content_type' ) ) :
    /**
     * about Options
     * @return array site about options
     */
    function tastypress_about_content_type() {
        $tastypress_about_content_type = array(
            'page'      => esc_html__( 'Page', 'tastypress' ),
        );

        if ( class_exists( 'WooCommerce' ) ) {
            $tastypress_about_content_type = array_merge( $tastypress_about_content_type, array(
                'product'    => esc_html__( 'Product', 'tastypress' ),
                ) );
        }

        $output = apply_filters( 'tastypress_about_content_type', $tastypress_about_content_type );


        return $output;
    }
endif;