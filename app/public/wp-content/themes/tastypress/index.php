<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

get_header(); 
$options = tastypress_get_theme_options(); 
?>

<div id="inner-content-wrapper" class="wrapper page-section">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="archive-blog-wrapper <?php echo esc_attr( $options['blog_column'] ); ?> clear">
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			<?php  
			/**
			* Hook - tastypress_action_pagination.
			*
			* @hooked tastypress_pagination 
			*/
			do_action( 'tastypress_action_pagination' ); 

			/**
			* Hook - tastypress_infinite_loader_spinner_action.
			*
			* @hooked tastypress_infinite_loader_spinner 
			*/
			do_action( 'tastypress_infinite_loader_spinner_action' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php  
	if ( tastypress_is_sidebar_enable() ) {
		get_sidebar();
	}
	?>
</div><!-- .wrapper -->

<?php
get_footer();
