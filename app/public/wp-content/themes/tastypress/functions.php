<?php
/**
 * Theme Palace functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

if ( ! function_exists( 'tastypress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tastypress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Theme Palace, use a find and replace
		 * to change 'tastypress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tastypress' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( "responsive-embeds" );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Enable excerpt for page.
		add_post_type_support( 'page', 'excerpt' );

		// Load Footer Widget Support.
		require_if_theme_supports( 'footer-widgets', get_template_directory() . '/inc/footer-widgets.php' );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 600, 600, true );

		// Set the default content width.
		$GLOBALS['content_width'] = 525;
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' 	=> esc_html__( 'Primary', 'tastypress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tastypress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// This setup supports logo, site-title & site-description
		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// add woocommerce support
		add_theme_support( 'woocommerce' );
		if ( class_exists( 'WooCommerce' ) ) {
			global $woocommerce;

			if( version_compare( $woocommerce->version, '3.0.0', ">=" ) ) {
				add_theme_support( 'wc-product-gallery-zoom' );
				add_theme_support( 'wc-product-gallery-lightbox' );
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( '/assets/css/editor-style' . tastypress_min() . '.css', tastypress_fonts_url() ) );

		// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
				'name' => esc_html__( 'Blue', 'tastypress' ),
				'slug' => 'blue',
				'color' => '#2c7dfa',
	       	),
	       	array(
	           	'name' => esc_html__( 'Green', 'tastypress' ),
	           	'slug' => 'green',
	           	'color' => '#07d79c',
	       	),
	       	array(
	           	'name' => esc_html__( 'Orange', 'tastypress' ),
	           	'slug' => 'orange',
	           	'color' => '#ff8737',
	       	),
	       	array(
	           	'name' => esc_html__( 'Black', 'tastypress' ),
	           	'slug' => 'black',
	           	'color' => '#2f3633',
	       	),
	       	array(
	           	'name' => esc_html__( 'Grey', 'tastypress' ),
	           	'slug' => 'grey',
	           	'color' => '#82868b',
	       	),
	   	));

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'tastypress' ),
		       	'shortName' => esc_html__( 'S', 'tastypress' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'tastypress' ),
		       	'shortName' => esc_html__( 'M', 'tastypress' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'tastypress' ),
		       	'shortName' => esc_html__( 'L', 'tastypress' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'tastypress' ),
		       	'shortName' => esc_html__( 'XL', 'tastypress' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'tastypress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tastypress_content_width() {

	$content_width = $GLOBALS['content_width'];


	$sidebar_position = tastypress_layout();
	switch ( $sidebar_position ) {

	  case 'no-sidebar':
	    $content_width = 1170;
	    break;

	  case 'left-sidebar':
	  case 'right-sidebar':
	    $content_width = 819;
	    break;

	  default:
	    break;
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 1170;
	}

	/**
	 * Filter tastypress content width of the theme.
	 *
	 * @since tastypress 1.0.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'tastypress_content_width', $content_width );
}
add_action( 'template_redirect', 'tastypress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tastypress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tastypress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tastypress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WooCommerce Sidebar', 'tastypress' ),
		'id'            => 'woocommerce-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'tastypress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebars( 4, array(
		'name'          => esc_html__( 'Optional Sidebar %d', 'tastypress' ),
		'id'            => 'optional-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'tastypress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tastypress_widgets_init' );


if ( ! function_exists( 'tastypress_fonts_url' ) ) :
/**
 * Register Google fonts
 *
 * @return string Google fonts URL for the theme.
 */
function tastypress_fonts_url() {
	$options = tastypress_get_theme_options();
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Barlow, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Barlow font: on or off', 'tastypress' ) ) {
		$fonts[] = 'Barlow:500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Mulish Script, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Mulish Script font: on or off', 'tastypress' ) ) {
		$fonts[] = 'Mulish Script:400,700';
	}



	/* translators: If there are characters in your language that are not supported by Exo+2, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Exo 2 font: on or off', 'tastypress' ) ) {
		$fonts[] = 'Exo 2:300,400,500,700,800,900,600';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $fonts ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $fonts ) {
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Add preconnect for Google Fonts.
 *
 * @since tastypress 1.0.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function tastypress_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'tastypress-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'tastypress_resource_hints', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function tastypress_scripts() {
	$options = tastypress_get_theme_options();
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'tastypress-fonts', tastypress_fonts_url(), array(), null );

	// font-awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome' . tastypress_min() . '.css', array(), '4.7.0' );

	// blocks
	wp_enqueue_style( 'tastypress-blocks', get_template_directory_uri() . '/assets/css/blocks' . tastypress_min() . '.css' );

	// slick
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick' . tastypress_min() . '.css' );

	// slick theme
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme' . tastypress_min() . '.css' );

	wp_enqueue_style( 'tastypress-style', get_stylesheet_uri() );

	//skip-link-focus-fix
	wp_enqueue_script( 'tastypress-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . tastypress_min() . '.js', array(), '20160412', true );

	wp_enqueue_script( 'tastypress-navigation', get_template_directory_uri() . '/assets/js/navigation' . tastypress_min() . '.js', array(), '20151215', true );
	
	$tastypress_l10n = array(
		'quote'          => tastypress_get_svg( array( 'icon' => 'quote-right' ) ),
		'expand'         => esc_html__( 'Expand child menu', 'tastypress' ),
		'collapse'       => esc_html__( 'Collapse child menu', 'tastypress' ),
		'icon'           => tastypress_get_svg( array( 'icon' => 'down', 'fallback' => true ) ),
	);
	
	wp_localize_script( 'tastypress-navigation', 'tastypress_l10n', $tastypress_l10n );

	if ( !is_front_page() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//slick.js
	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.6.0', true );

	// imagesloaded
	wp_enqueue_script( 'imagesloaded' );


	wp_enqueue_script( 'tastypress-custom', get_template_directory_uri() . '/assets/js/custom' . tastypress_min() . '.js', array( 'jquery' ), '20151215', true );

	if ( 'infinite' == $options['pagination_type']) {
		// infinite scroll js
		wp_enqueue_script( 'tastypress-infinite-scroll', get_template_directory_uri() . '/assets/js/infinite-scroll' . tastypress_min() . '.js', array( 'jquery' ), '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'tastypress_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since tastypress 1.0.0
 */
function tastypress_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'tastypress-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . tastypress_min() . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'tastypress-fonts', tastypress_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'tastypress_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load core file
 */
require get_template_directory() . '/inc/core.php';

/**
* Add widget
*/
require get_template_directory() . '/inc/widgets/widgets.php';

