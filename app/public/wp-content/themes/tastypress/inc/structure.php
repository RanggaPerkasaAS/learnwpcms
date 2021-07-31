<?php
/**
 * Theme Palace basic theme structure hooks
 *
 * This file contains structural hooks.
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

$options = tastypress_get_theme_options();


if ( ! function_exists( 'tastypress_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since tastypress 1.0.0
	 */
	function tastypress_doctype() {
	?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php
	}
endif;

add_action( 'tastypress_doctype', 'tastypress_doctype', 10 );


if ( ! function_exists( 'tastypress_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
		<?php endif;
	}
endif;
add_action( 'tastypress_before_wp_head', 'tastypress_head', 10 );

if ( ! function_exists( 'tastypress_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_page_start() {
		?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tastypress' ); ?></a>

		<?php
	}
endif;
add_action( 'tastypress_page_start_action', 'tastypress_page_start', 10 );

if ( ! function_exists( 'tastypress_header_start' ) ) :
	/**
	 * Header start html codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_header_start() {
		$options = tastypress_get_theme_options();
		?>
		
		<div class="menu-overlay"></div>		
		<header id="masthead" class="site-header" role="banner">
		<?php
	}
endif;
add_action( 'tastypress_header_action', 'tastypress_header_start', 20 );

if ( ! function_exists( 'tastypress_page_end' ) ) :
	/**
	 * Page end html codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'tastypress_page_end_action', 'tastypress_page_end', 10 );

if ( ! function_exists( 'tastypress_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_site_branding() {
		$options  = tastypress_get_theme_options();
		$header_txt_logo_extra = $options['header_txt_logo_extra'];		
		?>
		<div class="wrapper">
		<div class="site-branding">
			<?php if ( in_array( $header_txt_logo_extra, array( 'show-all', 'logo-title', 'logo-tagline' ) ) && has_custom_logo() ) { ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php } 
			if ( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title', 'show-all', 'tagline-only', 'logo-tagline' ) ) ) : ?>
				<div id="site-identity">
					<?php
					if( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title' ) )  ) {
						if ( tastypress_is_latest_posts() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name','display' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name','display' ); ?></a></p>
						<?php
						endif;
					} 
					if ( in_array( $header_txt_logo_extra, array( 'show-all', 'tagline-only', 'logo-tagline' ) ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php
						endif; 
					}?>
				</div>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}
endif;
add_action( 'tastypress_header_action', 'tastypress_site_branding', 20 );

if ( ! function_exists( 'tastypress_site_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_site_navigation() {
		$options = tastypress_get_theme_options();
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php
				echo tastypress_get_svg( array( 'icon' => 'menu' ) );
				echo tastypress_get_svg( array( 'icon' => 'close' ) );
				?>					
				<span class="menu-label"><?php esc_html_e( 'Menu', 'tastypress' ); ?></span>
			</button>

			<?php  
		
	            $search = '';

				$search .= '<li class="search"><div class="search-item"><ul>';
				if ( $options['search_icon_in_primary_menu_enable'] == true ) {
					$search .= '<li class="search-menu"><a href="#">';
					$search .= tastypress_get_svg( array( 'icon' => 'search' ) );
					$search .= tastypress_get_svg( array( 'icon' => 'close' ) );
					$search .= '</a><div id="search">';
					$search .= get_search_form( $echo = false );
		            $search .= '</div><!-- #search --></li>';
				}
				if ( $options['cart_menu_enable'] == true && class_exists('WooCommerce') ) {
					 $search .= '<li><a class="count" href="'.wc_get_cart_url().'"><svg viewBox="0 -31 512.00033 512" class="icon-location"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"></path><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"></path><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"></path></svg> <span>'.WC()->cart->get_cart_contents_count().'</span></a></li>';
				}
	           	if ( !empty( $options['header_menu_btn_link'] ) ) {
	           		 $search .= '<li><a href="'.esc_url( $options['header_menu_btn_link'] ).'" class="custom-button"> <svg viewBox="0 0 512 512"><path d="m512 60v392c0 33.085938-26.914062 60-60 60h-241c-33.085938 0-60-26.914062-60-60v-80h40v80c0 11.027344 8.972656 20 20 20h241c11.027344 0 20-8.972656 20-20v-392c0-11.027344-8.972656-20-20-20h-241c-11.027344 0-20 8.972656-20 20v80h-40v-80c0-33.085938 26.914062-60 60-60h241c33.085938 0 60 26.914062 60 60zm-299.285156 262 28.285156 28.285156 94.285156-94.285156-94.285156-94.285156-28.285156 28.285156 46 46h-258.714844v40h258.714844zm0 0"/></svg>'.esc_html( $options['menu_btn_label'] ).'</a></li>';
	           	}
	           
	            $search .= '</ul></div></li>';
	             
        			
                wp_nav_menu( 
                	array(
                		'theme_location' => 'primary',
                		'container' => 'div',
                		'menu_class' => 'menu nav-menu',
                		'menu_id' => 'primary-menu',
                		'echo' => true,
                		'fallback_cb' => 'tastypress_menu_fallback_cb',
                		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $search . '</ul>',
                		)
                	);
        	?>
		</nav><!-- #site-navigation -->
		</div><!-- .wrapper -->
		<?php
	}
endif;
add_action( 'tastypress_header_action', 'tastypress_site_navigation', 30 );


if ( ! function_exists( 'tastypress_header_end' ) ) :
	/**
	 * Header end html codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_header_end() {
		?>
		</header><!-- #masthead -->
		<?php
	}
endif;

add_action( 'tastypress_header_action', 'tastypress_header_end', 50 );

if ( ! function_exists( 'tastypress_content_start' ) ) :
	/**
	 * Site content codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_content_start() {
		?>
		<div id="content" class="site-content">
		<?php
	}
endif;
add_action( 'tastypress_content_start_action', 'tastypress_content_start', 10 );

if ( ! function_exists( 'tastypress_header_image' ) ) :
	/**
	 * Header Image codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_header_image() {
		if ( tastypress_is_frontpage() )
			return;
		$header_image = get_header_image();
		$class = '';
		if ( is_singular() ) :
			$class = ( has_post_thumbnail() || ! empty( $header_image ) ) ? '' : 'header-media-disabled';
		else :
			$class = ! empty( $header_image ) ? '' : 'header-media-disabled';
		endif;
		
		if ( is_singular() && has_post_thumbnail() ) : 
			$header_image = get_the_post_thumbnail_url( get_the_id(), 'full' );
    	endif; ?>

    	<div id="page-site-header" class="relative <?php echo esc_attr( $class ); ?>" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
			<div class="wrapper">
				<header class="page-header">
					<?php echo tastypress_custom_header_banner_title(); ?>
				</header>
				<?php tastypress_add_breadcrumb(); ?>
			</div><!-- .wrapper -->
        </div><!-- #page-site-header -->

	<?php
	}
endif;
add_action( 'tastypress_header_image_action', 'tastypress_header_image', 10 );

if ( ! function_exists( 'tastypress_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since tastypress 1.0.0
	 */
	function tastypress_add_breadcrumb() {
		$options = tastypress_get_theme_options();
		// Bail if Breadcrumb disabled.
		$breadcrumb = $options['breadcrumb_enable'];
		if ( false === $breadcrumb ) {
			return;
		}
		
		// Bail if Home Page.
		if ( tastypress_is_frontpage() ) {
			return;
		}

		echo '<div id="breadcrumb-list" >';
				/**
				 * tastypress_simple_breadcrumb hook
				 *
				 * @hooked tastypress_simple_breadcrumb -  10
				 *
				 */
				do_action( 'tastypress_simple_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;

if ( ! function_exists( 'tastypress_content_end' ) ) :
	/**
	 * Site content codes
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_content_end() {
		?>
		</div><!-- #content -->
		<?php
	}
endif;
add_action( 'tastypress_content_end_action', 'tastypress_content_end', 10 );

if ( ! function_exists( 'tastypress_footer_start' ) ) :
	/**
	 * Footer starts
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_footer_start() {
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
	}
endif;
add_action( 'tastypress_footer', 'tastypress_footer_start', 10 );

if ( ! function_exists( 'tastypress_footer_site_info' ) ) :
	/**
	 * Footer starts
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_footer_site_info() {
		$options = tastypress_get_theme_options();
		$search = array( '[the-year]', '[site-link]' );

        $replace = array( date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'.  get_bloginfo( 'name', 'display' ). '</a>' );

        $options['copyright_text'] = str_replace( $search, $replace, $options['copyright_text'] );

		$copyright_text = $options['copyright_text']; 
		?>
		<div class="site-info col-2">
			<div class="wrapper">
			<?php if( !empty( $options['footer_logo'] ) ): ?>
					<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $options['footer_logo'] ); ?>" alt="<?php bloginfo( 'name' ); ?>"></a></span>
					<span>
					<?php endif;

					echo tastypress_santize_allow_tag( $copyright_text ); ?>					
				</span>
			</div><!-- .wrapper -->    
		</div><!-- .site-info -->

		<?php
	}
endif;
add_action( 'tastypress_footer', 'tastypress_footer_site_info', 40 );

if ( ! function_exists( 'tastypress_footer_scroll_to_top' ) ) :
	/**
	 * Footer starts
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_footer_scroll_to_top() {
		$options  = tastypress_get_theme_options();
		if ( true === $options['scroll_top_visible'] ) : ?>
			<div class="backtotop"><?php echo tastypress_get_svg( array( 'icon' => 'up' ) ); ?></div>
		<?php endif;
	}
endif;
add_action( 'tastypress_footer', 'tastypress_footer_scroll_to_top', 40 );

if ( ! function_exists( 'tastypress_footer_end' ) ) :
	/**
	 * Footer starts
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_footer_end() {
		?>
		</footer>
		<div class="popup-overlay"></div>
		<?php
	}
endif;
add_action( 'tastypress_footer', 'tastypress_footer_end', 100 );

if ( ! function_exists( 'tastypress_loader' ) ) :
	/**
	 * Start div id #loader
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_loader() {
		$options = tastypress_get_theme_options();
		if ( $options['loader_enable'] ) { ?>

			<div id="loader">
            <div class="loader-container">
            	<?php if ( 'default' == $options['loader_icon'] ) : ?>
	                <div id="preloader">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </div>
	            <?php else :
	            	echo tastypress_get_svg( array( 'icon' => esc_attr( $options['loader_icon'] ) ) );
	            endif; ?>
            </div>
        </div><!-- #loader -->
		<?php }
	}
endif;
add_action( 'tastypress_before_header', 'tastypress_loader', 10 );

if ( ! function_exists( 'tastypress_infinite_loader_spinner' ) ) :
	/**
	 *
	 * @since tastypress 1.0.0
	 *
	 */
	function tastypress_infinite_loader_spinner() { 
		global $post;
		$options = tastypress_get_theme_options();
		if ( ($options['pagination_type'] == 'infinite') ):
			if ( count((array) $post ) > 0 ) {
				echo '<div class="blog-loader">' . tastypress_get_svg( array( 'icon' => 'spinner-umbrella' ) ) . '</div>';
			}
		endif;
	}
endif;
add_action( 'tastypress_infinite_loader_spinner_action', 'tastypress_infinite_loader_spinner', 10 );
