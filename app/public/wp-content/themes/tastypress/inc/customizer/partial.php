<?php
/**
* Partial functions
*
* @package Theme Palace
* @subpackage tastypress
* @since tastypress 1.0.0
*/

if ( ! function_exists( 'tastypress_slider_btn_label_partial' ) ) :
    // slider_btn_label
    function tastypress_slider_btn_label_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['slider_btn_label'] );
    }
endif;


if ( ! function_exists( 'tastypress_counter_sub_title_partial' ) ) :
    function tastypress_counter_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['counter_sub_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_counter_title_partial' ) ) :
    function tastypress_counter_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['counter_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_hero_sub_title_partial' ) ) :
    /**
     * hero us section Sub Title partial Refresh
     * @return String
     */
    function tastypress_hero_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['hero_sub_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_hero_btn_title_partial' ) ) :
    // hero btn title
    function tastypress_hero_btn_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['hero_btn_title'] );
    }
endif;

//tastypress_hero_counter_title_partial
if ( ! function_exists( 'tastypress_hero_counter_title_partial' ) ) :
    // hero btn title
    function tastypress_hero_counter_title_partial($i) {
        $options = tastypress_get_theme_options();
        return esc_html( $options['hero_counter_title_'.$i.''] );
    }
endif;




if ( ! function_exists( 'tastypress_service_title_partial' ) ) :
    // service_title
    function tastypress_service_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['service_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_service_sub_title_partial' ) ) :
    // service_sub_title
    function tastypress_service_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['service_sub_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_copyright_text_partial' ) ) :
    // copyright text
    function tastypress_copyright_text_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['copyright_text'] );
    }
endif;



if ( ! function_exists( 'tastypress_testimonial_title_partial' ) ) :
    //testimonial title
    function tastypress_testimonial_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['testimonial_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_testimonial_sub_title_partial' ) ) :
    //testimonial_sub_title
    function tastypress_testimonial_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['testimonial_sub_title'] );
    }
endif;


if ( ! function_exists( 'tastypress_reserve_sub_title_partial' ) ) :
    //reserve_sub_title
    function tastypress_reserve_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['reserve_sub_title'] );
    }
endif;




if ( ! function_exists( 'tastypress_release_sub_title_partial' ) ) :
    //release_sub_title
    function tastypress_release_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['release_sub_title'] );
    }
endif;


if ( ! function_exists( 'tastypress_release_btn_title_partial' ) ) :
    //release_btn_title
    function tastypress_release_btn_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['release_btn_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_blog_sub_title_partial' ) ) :
    //blog_sub_title
    function tastypress_blog_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['blog_sub_title'] );
    }
endif;


if ( ! function_exists( 'tastypress_blog_btn_title_partial' ) ) :
    //blog_btn_title
    function tastypress_blog_btn_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['blog_btn_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_3column_title_partial' ) ) :
    //3column_title
    function tastypress_3column_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['3column_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_2column_title_partial' ) ) :
    //2column_title
    function tastypress_2column_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['2column_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_4column_title_partial' ) ) :
    //4column_title
    function tastypress_4column_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['4column_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_magazine_featured_post_title_partial' ) ) :
    //magazine_featured_post_title
    function tastypress_magazine_featured_post_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['magazine_featured_post_title'] );
    }
endif;




if ( ! function_exists( 'tastypress_download_sub_title_partial' ) ) :
    //download_sub_title
    function tastypress_download_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['download_sub_title'] );
    }
endif;


if ( ! function_exists( 'tastypress_download_btn_title_partial' ) ) :
    //download_btn_title
    function tastypress_download_btn_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['download_btn_title'] );
    }
endif;
    
if ( ! function_exists( 'tastypress_slider_sub_title_partial' ) ) :
    //slider_sub_title
    function tastypress_slider_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['slider_sub_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_cta_sub_title_partial' ) ) :
    //cta_sub_title
    function tastypress_cta_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['cta_sub_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_cta_btn_title_partial' ) ) :
    //cta_btn_title
    function tastypress_cta_btn_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['cta_btn_title'] );
    }
endif;

if ( ! function_exists( 'tastypress_video_sub_title_partial' ) ) :
    //video_sub_title
    function tastypress_video_sub_title_partial() {
        $options = tastypress_get_theme_options();
        return esc_html( $options['video_sub_title'] );
    }
endif;

    

    

    
