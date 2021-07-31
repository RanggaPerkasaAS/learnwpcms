<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 * @return array An array of default values
 */

function tastypress_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$tastypress_default_options = array(
		'search_icon_in_primary_menu_enable' => true,
		// Color Options
		'header_title_color'			=> '#000',
		'header_tagline_color'			=> '#666',
		'header_txt_logo_extra'			=> 'show-all',
		'colorscheme_hue'				=> '#F38625',
		'colorscheme'					=> 'default',
		'theme_version'					=> 'lite-version',
		'home_layout'					=> 'default-design',
		'search_icon_in_primary_menu_enable'			=>true,
		'cart_menu_enable'			=>true,
		'menu_btn_label'			=> esc_html__( 'Login', 'tastypress' ),
		
		// typography Options
		'theme_typography' 				=> 'default',
		'body_theme_typography' 		=> 'default',
		
		// loader
		'loader_enable'         		=> false,
		'loader_icon'         			=> 'default',

		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide-layout',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_sticky'					=> true,
		'social_nav_enable'				=> true,

		// excerpt options
		'long_excerpt_length'           => 25,
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s. All Rights Reserved', '1: Year, 2: Site Title with home URL', 'tastypress' ), '[the-year]', '[site-link]' ),
		'scroll_top_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,

		// homepage sections sortable
		'sortable' 						=> 'hero,service,about,counter,reserve,testimonial,download',

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'tastypress' ),
		'hide_date' 					=> false,
		'hide_category'					=> false,
		'blog_page_button' 				=> esc_html__( 'READ MORE', 'tastypress' ),
		'blog_column'					=> 'col-1',

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		

		/* Front Page */

		// hero
		'hero_section_enable'			=> false,
		'hero_content_type'			=> 'page',
		'hero_title'					=> esc_html__( 'Delicious Food is Worth Waiting', 'tastypress' ),
		'hero_description'				=> esc_html__( 'FASTEST DELIVERY IN TOWN SUMMER SPECIAL!', 'tastypress' ),
		'hero_btn_title'				=> esc_html__( 'View Menu', 'tastypress' ),
		'hero_label'					=> esc_html__( 'Our Happy Customer', 'tastypress' ),
		'hero_sub_label'				=> esc_html__( '(12.5k Review)', 'tastypress' ),
		'hero_excerpt_length'			=> 25,


		// service
		'service_section_enable'		=> false,
		'service_content_type'			=> 'page',
		'service_count'					=> 3,
		'service_excerpt_length'		=> 25,
		'service_sub_title'				=> esc_html('OUR SERVICES', 'tastypress'),
		'service_title'					=> esc_html('Your Food Delivery Partner', 'tastypress'),
		'service_design_type'			=> 'type-1',

		//menu 
		'menu_section_enable'	=> false,
		'menu_content_type'		=> 'page',
		'menu_title'				=> esc_html__( 'Explore Our Tasty Food Lists', 'tastypress' ),
		'menu_sub_title'			=> esc_html__( 'Our Menu', 'tastypress' ),


		// about
		'about_section_enable'			=> false,
		'about_content_type'			=> 'page',
		'about_title'					=> esc_html__( 'TRAVEL & TOUR', 'tastypress' ),
		'about_sub_title'				=> esc_html__( 'about', 'tastypress' ),
		'about_description'				=> esc_html__( 'Lots of people are traveling the entire world. They have got their own purposes. You can also travel the world. We will tell you how to travel the river, sea, hilly areas, mountain & so on...', 'tastypress' ),
		'about_btn_title'				=> esc_html__( 'LEARN More', 'tastypress' ),
		'about_excerpt_length'			=> 80,

		// counter
		'counter_section_enable'		=> false,
		'counter_count'					=> 4,
		'counter_column'				=> 'col-4',
		'counter_sub_title'				=> esc_html__( 'Our Experience', 'tastypress' ),
		'counter_title'					=> esc_html__( 'ADVENTURE STARTS HERE', 'tastypress' ),

		// testimonial
		'testimonial_section_enable'	=> false,
		'testimonial_auto_play'			=> false,
		'testimonial_title'				=> esc_html__( 'WHAT PEOPLE SAYS', 'tastypress' ),
		'testimonial_sub_title'			=> esc_html__( 'Testimonials', 'tastypress' ),
		'testimonial_content_type'		=> 'category',
		'testimonial_count'				=> 4,
		'testimonial_excerpt_length'	=> 30,
		'testimonial_position'	=> '',

		// reserve
		'reserve_section_enable'			=> false,
		'reserve_content_type'				=> 'page',
		'reserve_title'						=> esc_html__( 'TRAVEL & TOUR', 'tastypress' ),
		'reserve_sub_title'					=> esc_html__( 'reserve', 'tastypress' ),
		'reserve_description'				=> esc_html__( 'Lots of people are traveling the entire world. They have got their own purposes. You can also travel the world. We will tell you how to travel the river, sea, hilly areas, mountain & so on...', 'tastypress' ),
		'reserve_btn_title'					=> esc_html__( 'LEARN More', 'tastypress' ),
		'reserve_excerpt_length'			=> 80,

		// download
		'download_section_enable'			=> false,
		'download_content_type'				=> 'page',
		'download_title'					=> esc_html__( 'TRAVEL & TOUR', 'tastypress' ),
		'download_sub_title'				=> esc_html__( 'download', 'tastypress' ),
		'download_description'				=> esc_html__( 'Lots of people are traveling the entire world. They have got their own purposes. You can also travel the world. We will tell you how to travel the river, sea, hilly areas, mountain & so on...', 'tastypress' ),
		'download_btn_title'				=> esc_html__( 'LEARN More', 'tastypress' ),
		'download_excerpt_length'			=> 25,

	);

	$output = apply_filters( 'tastypress_default_theme_options', $tastypress_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}