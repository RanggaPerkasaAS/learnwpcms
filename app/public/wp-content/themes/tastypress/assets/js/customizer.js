/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	//added js
	wp.customize( 'tastypress_theme_options[slider_btn_label]', function( value ) {
		value.bind( function( to ) {
			if(to.length==0){
				$('#slider-read-more').hide()
			}
			else{
				$('#slider-read-more').show();
				$( '#slider-read-more a' ).text( to );
			}
		} );
	} );
	wp.customize( 'tastypress_theme_options[slider_video_label]', function( value ) {
		value.bind( function( to ) {
			$( '.featured-content-wrapper .video-link span' ).text( to );
		} );
	} );

	wp.customize( 'tastypress_theme_options[service_btn_label]', function( value ) {
		value.bind( function( to ) {
			if(to.length==0){
				$( '#our-services .entry-container a.more-link' ).hide();
			}else{
				$( '#our-services .entry-container a.more-link' ).show();
				$( '#our-services .entry-container a.more-link span' ).text( to );
			}
		} );
	} );
	wp.customize( 'tastypress_theme_options[popular_destination_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#popular-destinations .section-header p.subtitle' ).text( to );
		} );
	} );
	wp.customize( 'tastypress_theme_options[popular_destination_btn_label]', function( value ) {
		value.bind( function( to ) {
			$( '#popular-destinations .bottom-details a.btn' ).text( to );
		} );
	} );
	wp.customize( 'tastypress_theme_options[featured_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#featured-packages .section-header-wrapper .section-header p.subtitle   ' ).text( to );
		} );
	} );
	wp.customize( 'tastypress_theme_options[cta_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#call-to-action .entry-header p' ).text( to );
		} );
	} );
	//cta_description
	wp.customize( 'tastypress_theme_options[cta_description]', function( value ) {
		value.bind( function( to ) {
			$( '#call-to-action .entry-content p' ).text( to );
		} );
	} );
	//gallery_sub_title
	wp.customize( 'tastypress_theme_options[gallery_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#our-gallery .section-header p.subtitle' ).text( to );
		} );
	} );
	//blog_sub_title
	wp.customize( 'tastypress_theme_options[blog_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#latest-posts .section-header-wrapper .section-header p.subtitle' ).text( to );
		} );
	} );
	//testimonial_sub_title
	wp.customize( 'tastypress_theme_options[testimonial_sub_title]', function( value ) {
		value.bind( function( to ) {
			$( '#testimonial-section .wrapper .section-header p.subtitle' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header title color.
	wp.customize( 'tastypress_theme_options[header_title_color]', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header tagline color.
	wp.customize( 'tastypress_theme_options[header_tagline_color]', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Color scheme.
	wp.customize( 'tastypress_theme_options[colorscheme]', function( value ) {
		value.bind( function( to ) {

			// Update color body class.
			$( 'body' )
				.removeClass( 'colors-light colors-dark colors-custom' )
				.addClass( 'colors-' + to );
		});
	});

	// Custom color hue.
	wp.customize( 'tastypress_theme_options[colorscheme_hue]', function( value ) {
		value.bind( function( to ) {

			// Update custom color CSS
			var style = $( '#custom-theme-colors' ),
			    color = style.data( 'color' ),
			    css = style.html();
			css = css.split( color ).join( to );
			style.html( css )
			     .data( 'color', to );
		} );
	} );
} )( jQuery );
