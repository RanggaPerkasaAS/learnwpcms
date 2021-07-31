<?php
/**
* Customizer validation functions
*
* @package Theme Palace
* @subpackage tastypress
* @since tastypress 1.0.0
*/

if ( ! function_exists( 'tastypress_validate_long_excerpt' ) ) :
  function tastypress_validate_long_excerpt( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 5 ) {
		 $validity->add( 'min_no_of_words', esc_html__( 'Minimum no of words is 5', 'tastypress' ) );
	 } elseif ( $value > 100 ) {
		 $validity->add( 'max_no_of_words', esc_html__( 'Maximum no of words is 100', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;


if ( ! function_exists( 'tastypress_validate_slider_count' ) ) :
  function tastypress_validate_slider_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_gallery_slider_count' ) ) :
  function tastypress_validate_gallery_slider_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_counter_count' ) ) :
  function tastypress_validate_counter_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_service_count' ) ) :
  function tastypress_validate_service_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_team_count' ) ) :
  function tastypress_validate_team_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 9 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 9', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_blog_count' ) ) :
  function tastypress_validate_blog_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;


if ( ! function_exists( 'tastypress_validate_testimonial_count' ) ) :
  function tastypress_validate_testimonial_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;


if ( ! function_exists( 'tastypress_validate_featured_posts_count' ) ) :
  function tastypress_validate_featured_posts_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;


if ( ! function_exists( 'tastypress_validate_recent_news_count' ) ) :
  function tastypress_validate_recent_news_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_latest_products_count' ) ) :
  function tastypress_validate_latest_products_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 6 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 6', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_popular_products_count' ) ) :
  function tastypress_validate_popular_products_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_recent_products_count' ) ) :
  function tastypress_validate_recent_products_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'tastypress_validate_trending_product_count' ) ) :
  function tastypress_validate_trending_product_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'tastypress' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'tastypress' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'tastypress' ) );
	 }
	 return $validity;
  }
endif;
