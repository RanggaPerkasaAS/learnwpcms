<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

if ( ! function_exists( 'tastypress_is_loader_enable' ) ) :
	/**
	 * Check if loader is enabled.
	 *
	 * @since tastypress 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function tastypress_is_loader_enable( $control ) {
		return $control->manager->get_setting( 'tastypress_theme_options[loader_enable]' )->value();
	}
endif;

if ( ! function_exists( 'tastypress_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since tastypress 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function tastypress_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'tastypress_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'tastypress_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since tastypress 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function tastypress_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'tastypress_theme_options[pagination_enable]' )->value();
	}
endif;

if ( ! function_exists( 'tastypress_is_static_homepage_enable' ) ) :
	/**
	 * Check if static homepage is enabled.
	 *
	 * @since tastypress 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function tastypress_is_static_homepage_enable( $control ) {
		return ( 'page' == $control->manager->get_setting( 'show_on_front' )->value() );
	}
endif;


/**
 * Front Page Active Callbacks
 */

/*=================hero Us section=======================*/

/**
 * Check if hero section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_hero_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[hero_section_enable]' )->value() );
}

/**
 * Check if hero section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_hero_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[hero_content_type]' )->value();
	return tastypress_is_hero_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if hero section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_hero_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[hero_content_type]' )->value();
	return tastypress_is_hero_section_enable( $control ) && ( 'page' == $content_type );
}


/**
 * Check if hero section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_hero_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[hero_content_type]' )->value();
	return tastypress_is_hero_section_enable( $control ) && ( 'custom' == $content_type );
}


/*======================Menu=====================*/
/**
 * Check if menu section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_menu_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[menu_section_enable]' )->value() );
}




/*======================Service=====================*/

/**
 * Check if service section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_service_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[service_section_enable]' )->value() );
}

/**
 * Check if service section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_service_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[service_content_type]' )->value();
	return tastypress_is_service_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if service section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_service_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[service_content_type]' )->value();
	return tastypress_is_service_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if service section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_service_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[service_content_type]' )->value();
	return tastypress_is_service_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if service section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_service_section_content_seperator_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[service_content_type]' )->value();
	return tastypress_is_service_section_enable( $control );
}

/*=================about Us section=======================*/

/**
 * Check if about section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_about_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[about_section_enable]' )->value() );
}

/**
 * Check if about section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_about_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[about_content_type]' )->value();
	return tastypress_is_about_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if about section content type is product.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_about_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[about_content_type]' )->value();
	return tastypress_is_about_section_enable( $control ) && ( 'product' == $content_type );
}


/**
 * Check if about section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_about_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[about_content_type]' )->value();
	return tastypress_is_about_section_enable( $control ) && ( 'page' == $content_type );
}



/**
 * Check if about section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_about_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[about_content_type]' )->value();
	return tastypress_is_about_section_enable( $control ) && ( 'custom' == $content_type );
}


/*=================reserve Us section=======================*/

/**
 * Check if reserve section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_reserve_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[reserve_section_enable]' )->value() );
}

/**
 * Check if reserve section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_reserve_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[reserve_content_type]' )->value();
	return tastypress_is_reserve_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if reserve section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_reserve_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[reserve_content_type]' )->value();
	return tastypress_is_reserve_section_enable( $control ) && ( 'page' == $content_type );
}


/**
 * Check if reserve section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_reserve_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[reserve_content_type]' )->value();
	return tastypress_is_reserve_section_enable( $control ) && ( 'custom' == $content_type );
}

/*=================download Us section=======================*/

/**
 * Check if download section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_download_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[download_section_enable]' )->value() );
}

/**
 * Check if download section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_download_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[download_content_type]' )->value();
	return tastypress_is_download_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if download section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_download_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[download_content_type]' )->value();
	return tastypress_is_download_section_enable( $control ) && ( 'page' == $content_type );
}


/**
 * Check if download section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_download_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[download_content_type]' )->value();
	return tastypress_is_download_section_enable( $control ) && ( 'custom' == $content_type );
}


/*=========================Counter Section==============================*/

/**
 * Check if counter section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_counter_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[counter_section_enable]' )->value() );
}






/*=================Slider Section===================*/

/**
 * Check if slider section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[slider_section_enable]' )->value() );
}

/**
 * Check if slider section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if slider section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if slider section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if Slider section content type is trip.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'trip' == $content_type );
}

/**
 * Check if Slider section content type is trip types.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_trip_types_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'trip-types' == $content_type );
}

/**
 * Check if Slider section content type is destination.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'destination' == $content_type );
}

/**
 * Check if Slider section content type is activity.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_slider_section_content_activity_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[slider_content_type]' )->value();
	return tastypress_is_slider_section_enable( $control ) && ( 'activity' == $content_type );
}



/*=================cta Us section=======================*/

/**
 * Check if cta section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_cta_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[cta_section_enable]' )->value() );
}

/**
 * Check if cta section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_cta_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[cta_content_type]' )->value();
	return tastypress_is_cta_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if cta section content type is product.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_cta_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[cta_content_type]' )->value();
	return tastypress_is_cta_section_enable( $control ) && ( 'product' == $content_type );
}


/**
 * Check if cta section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_cta_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[cta_content_type]' )->value();
	return tastypress_is_cta_section_enable( $control ) && ( 'page' == $content_type );
}



/**
 * Check if cta section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_cta_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[cta_content_type]' )->value();
	return tastypress_is_cta_section_enable( $control ) && ( 'custom' == $content_type );
}



/*=================video Us section=======================*/

/**
 * Check if video section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_video_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[video_section_enable]' )->value() );
}

/**
 * Check if video section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_video_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[video_content_type]' )->value();
	return tastypress_is_video_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if video section content type is product.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_video_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[video_content_type]' )->value();
	return tastypress_is_video_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if video section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_video_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[video_content_type]' )->value();
	return tastypress_is_video_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if video section content type is custom.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_video_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[video_content_type]' )->value();
	return tastypress_is_video_section_enable( $control ) && ( 'custom' == $content_type );
}



/*=======================blog=======================*/
/**
 * Check if blog section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[blog_section_enable]' )->value());
}

/**
 * Check if blog section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_blog_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if blog section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[blog_content_type]' )->value();
	return tastypress_is_blog_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if blog section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[blog_content_type]' )->value();
	return tastypress_is_blog_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if blog section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[blog_content_type]' )->value();
	return tastypress_is_blog_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if blog section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_blog_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[blog_content_type]' )->value();
	return tastypress_is_blog_section_enable( $control ) && ( 'recent' == $content_type ) ;
}





/*=================Gallery Slider Section===================*/

/**
 * Check if gallery_slider section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_section_enable]' )->value() );
}

/**
 * Check if gallery_slider section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if gallery_slider section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if gallery_slider section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if Gallery Slider section content type is trip.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'trip' == $content_type );
}

/**
 * Check if Gallery Slider section content type is trip types.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_trip_types_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'trip-types' == $content_type );
}

/**
 * Check if Gallery Slider section content type is destination.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'destination' == $content_type );
}

/**
 * Check if Gallery Slider section content type is activity.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_gallery_slider_section_content_activity_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[gallery_slider_content_type]' )->value();
	return tastypress_is_gallery_slider_section_enable( $control ) && ( 'activity' == $content_type );
}

/*====================Popular Destination========================*/
/**
 * Check if popular destination section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[popular_destination_section_enable]' )->value() );
}

/**
 * Check if popular destination section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if popular Destination section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if popular Destination section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if popular Destination section content type is trip.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'trip' == $content_type );
}

/**
 * Check if popular destination section content type is trip types.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_trip_types_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'trip-types' == $content_type );
}

/**
 * Check if popular destination section content type is destination.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'destination' == $content_type );
}

/**
 * Check if popular destination section content type is activity.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_destination_section_content_activity_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_destination_content_type]' )->value();
	return tastypress_is_popular_destination_section_enable( $control ) && ( 'activity' == $content_type );
}


/*====================recommended Destination========================*/
/**
 * Check if recommended destination section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_section_enable]' )->value() );
}

/**
 * Check if recommended destination section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if Recommended Destination section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if Recommended Destination section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if Recommended Destination section content type is trip.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'trip' == $content_type );
}

/**
 * Check if recommended destination section content type is trip types.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_trip_types_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'trip-types' == $content_type );
}

/**
 * Check if recommended destination section content type is destination.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'destination' == $content_type );
}

/**
 * Check if recommended destination section content type is activity.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recommended_destination_section_content_activity_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recommended_destination_content_type]' )->value();
	return tastypress_is_recommended_destination_section_enable( $control ) && ( 'activity' == $content_type );
}

/*=======================release=======================*/
/**
 * Check if release section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[release_section_enable]' )->value());
}

/**
 * Check if release section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_release_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if release section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[release_content_type]' )->value();
	return tastypress_is_release_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if release section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[release_content_type]' )->value();
	return tastypress_is_release_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if release section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[release_content_type]' )->value();
	return tastypress_is_release_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if release section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_release_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[release_content_type]' )->value();
	return tastypress_is_release_section_enable( $control ) && ( 'recent' == $content_type ) ;
}


/*======================Testimonial===============================*/
/**
 * Check if testimonial section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_testimonial_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[testimonial_section_enable]' )->value() );
}

/**
 * Check if testimonial section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_testimonial_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[testimonial_content_type]' )->value();
	return tastypress_is_testimonial_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if testimonial section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_testimonial_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[testimonial_content_type]' )->value();
	return tastypress_is_testimonial_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if testimonial section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_testimonial_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[testimonial_content_type]' )->value();
	return tastypress_is_testimonial_section_enable( $control ) && ( 'category' == $content_type );
}


/*=======================Team==========================*/

/**
 * Check if team section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_team_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[team_section_enable]' )->value() );
}

/**
 * Check if team section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_team_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[team_content_type]' )->value();
	return tastypress_is_team_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if team section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_team_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[team_content_type]' )->value();
	return tastypress_is_team_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if team section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_team_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[team_content_type]' )->value();
	return tastypress_is_team_section_enable( $control ) && ( 'post' == $content_type );
}

/*======================Recent News===============================*/
/**
 * Check if recent_news section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recent_news_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[recent_news_section_enable]' )->value() );
}

/**
 * Check if recent_news section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recent_news_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recent_news_content_type]' )->value();
	return tastypress_is_recent_news_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if recent_news section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recent_news_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recent_news_content_type]' )->value();
	return tastypress_is_recent_news_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if recent_news section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recent_news_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recent_news_content_type]' )->value();
	return tastypress_is_recent_news_section_enable( $control ) && ( 'category' == $content_type );
}

/*========================Featured Posts=========================*/

/**
 * Check if featured_posts section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_featured_posts_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[featured_posts_section_enable]' )->value() );
}

/**
 * Check if featured_posts section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_featured_posts_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[featured_posts_content_type]' )->value();
	return tastypress_is_featured_posts_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if featured_posts section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_featured_posts_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[featured_posts_content_type]' )->value();
	return tastypress_is_featured_posts_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if featured_posts section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_featured_posts_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[featured_posts_content_type]' )->value();
	return tastypress_is_featured_posts_section_enable( $control ) && ( 'category' == $content_type );
}

/*========================Latest Products========================*/

/**
 * Check if latest release section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_latest_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[latest_products_section_enable]' )->value() ) && class_exists( 'WooCommerce' );
}

/**
 * Check if latest release section content type is product.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_latest_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[latest_products_content_type]' )->value();
	return tastypress_is_latest_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if latest release section content type is product category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_latest_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[latest_products_content_type]' )->value();
	return tastypress_is_latest_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/*========================Popular Products=======================*/

/**
 * Check if popular_products section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_popular_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[popular_products_section_enable]' )->value() );
}

function tastypress_is_popular_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_products_content_type]' )->value();
	return tastypress_is_popular_products_section_enable( $control ) && ( 'product' == $content_type );
}

function tastypress_is_popular_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[popular_products_content_type]' )->value();
	return tastypress_is_popular_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/*========================products collection====================*/
/**
 * Check if product section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_collection_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[collection_section_enable]' )->value() ) && class_exists( 'WooCommerce' );
}
/*========================Recent Product=========================*/

/**
 * Check if recent_products section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_recent_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[recent_products_section_enable]' )->value() );
}

function tastypress_is_recent_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recent_products_content_type]' )->value();
	return tastypress_is_recent_products_section_enable( $control ) && ( 'product' == $content_type );
}

function tastypress_is_recent_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[recent_products_content_type]' )->value();
	return tastypress_is_recent_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/*========================Featured Products======================*/


//featured section
function tastypress_is_featured_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[featured_products_section_enable]' )->value() ) && class_exists( 'WooCommerce' );
}

/*========================Treanding Products=====================*/


function tastypress_is_trending_product_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[trending_product_section_enable]' )->value() ) && class_exists( 'WooCommerce' );
}

/**
 * Check if trending_product section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */

function tastypress_is_trending_product_section_content_category_enable_1( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_1]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product_cat' == $content_type );
}

function tastypress_is_trending_product_section_content_category_enable_2( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_2]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product_cat' == $content_type );
}

function tastypress_is_trending_product_section_content_category_enable_3( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_3]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product_cat' == $content_type );
}

function tastypress_is_trending_product_section_content_product_enable_1( $control ) {
		$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_1]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product' == $content_type );
}

function tastypress_is_trending_product_section_content_product_enable_2( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_2]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product' == $content_type );
}

function tastypress_is_trending_product_section_content_product_enable_3( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[trending_content_type_3]' )->value();
	return tastypress_is_trending_product_section_enable( $control ) && ( 'product' == $content_type );
}

/*========================Subscription===========================*/
/**
 * Check if subscription section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_subscription_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[subscription_section_enable]' )->value() );
}



/**
 * Check if trip search title is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_trip_search_title_enable( $control ) {
	return ( tastypress_is_trip_search_enable($control) && $control->manager->get_setting( 'tastypress_theme_options[trip_search_enable]' )->value() );
}


/*=================event=========================*/

/**
 * Check if event section is enabled.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[event_section_enable]' )->value() );
}

/**
 * Check if event section content type is post.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options_event_content_type' )->value();
	return tastypress_is_event_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if event section content type is page.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options_event_content_type' )->value();
	return tastypress_is_event_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if event section content type is category.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options_event_content_type' )->value();
	return tastypress_is_event_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if event section content type is event.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_content_event_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options_event_content_type' )->value();
	return tastypress_is_event_section_enable( $control ) && ( 'event' == $content_type );
}

/**
 * Check if event section content type is event category.
 *
 * @since Mega Charity Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_event_section_content_event_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options_event_content_type' )->value();
	return tastypress_is_event_section_enable( $control ) && ( 'event-category' == $content_type );
}



/*=======================highlighted=======================*/
/**
 * Check if highlighted section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[highlighted_section_enable]' )->value());
}

/**
 * Check if highlighted section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_highlighted_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if highlighted section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[highlighted_content_type]' )->value();
	return tastypress_is_highlighted_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if highlighted section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[highlighted_content_type]' )->value();
	return tastypress_is_highlighted_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if highlighted section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[highlighted_content_type]' )->value();
	return tastypress_is_highlighted_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if highlighted section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_highlighted_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[highlighted_content_type]' )->value();
	return tastypress_is_highlighted_section_enable( $control ) && ( 'recent' == $content_type ) ;
}



/*=======================3column=======================*/
/**
 * Check if 3column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[3column_section_enable]' )->value());
}

/**
 * Check if 3column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_3column_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if 3column section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[3column_content_type]' )->value();
	return tastypress_is_3column_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if 3column section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[3column_content_type]' )->value();
	return tastypress_is_3column_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if 3column section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[3column_content_type]' )->value();
	return tastypress_is_3column_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if 3column section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_3column_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[3column_content_type]' )->value();
	return tastypress_is_3column_section_enable( $control ) && ( 'recent' == $content_type ) ;
}


/*=======================magazine_featured_post=======================*/
/**
 * Check if magazine_featured_post section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[magazine_featured_post_section_enable]' )->value());
}

/**
 * Check if magazine_featured_post section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_magazine_featured_post_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if magazine_featured_post section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[magazine_featured_post_content_type]' )->value();
	return tastypress_is_magazine_featured_post_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if magazine_featured_post section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[magazine_featured_post_content_type]' )->value();
	return tastypress_is_magazine_featured_post_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if magazine_featured_post section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[magazine_featured_post_content_type]' )->value();
	return tastypress_is_magazine_featured_post_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if magazine_featured_post section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_magazine_featured_post_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[magazine_featured_post_content_type]' )->value();
	return tastypress_is_magazine_featured_post_section_enable( $control ) && ( 'recent' == $content_type ) ;
}



/*=======================2column=======================*/
/**
 * Check if 2column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[2column_section_enable]' )->value());
}

/**
 * Check if 2column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_2column_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if 2column section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[2column_content_type]' )->value();
	return tastypress_is_2column_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if 2column section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[2column_content_type]' )->value();
	return tastypress_is_2column_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if 2column section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[2column_content_type]' )->value();
	return tastypress_is_2column_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if 2column section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_2column_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[2column_content_type]' )->value();
	return tastypress_is_2column_section_enable( $control ) && ( 'recent' == $content_type ) ;
}



/*=======================4column=======================*/
/**
 * Check if 4column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_section_enable( $control ) {
	return ( $control->manager->get_setting( 'tastypress_theme_options[4column_section_enable]' )->value());
}

/**
 * Check if 4column section is enabled.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_title_section_enable( $control ) {
	$home_layout = $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value();
	return ( tastypress_is_4column_section_enable($control) && ($home_layout != 'fourth-design'));
}

/**
 * Check if 4column section content type is post.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[4column_content_type]' )->value();
	return tastypress_is_4column_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if 4column section content type is page.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[4column_content_type]' )->value();
	return tastypress_is_4column_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if 4column section content type is category.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[4column_content_type]' )->value();
	return tastypress_is_4column_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if 4column section content type is recent.
 *
 * @since tastypress 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function tastypress_is_4column_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'tastypress_theme_options[4column_content_type]' )->value();
	return tastypress_is_4column_section_enable( $control ) && ( 'recent' == $content_type ) ;
}


function tastypress_if_pro_section_enable( $control ){
	return in_array( $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value(), array( 'default-design', 'all-design' )  );
}

function tastypress_if_all_section_enable( $control ){
	return $control->manager->get_setting( 'tastypress_theme_options[home_layout]' )->value() == 'all-design';
}