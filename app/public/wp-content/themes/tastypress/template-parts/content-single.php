<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */
$options = tastypress_get_theme_options();
?>

<article class="hentry">
	<div class="entry-container">
		<div class="entry-content">
			<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tastypress' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tastypress' ),
				'after'  => '</div>',
				) );
				?>
		</div><!-- .entry-content -->
	</div><!-- .entry-container -->

	<div class="entry-meta">
		<?php if ( ! $options['single_post_hide_author'] ) :
		echo tastypress_author_meta();
		endif; 

		if ( ! $options['single_post_hide_date'] ) :
			tastypress_posted_on(); 
		endif;

		tastypress_entry_footer(); ?> 
	</div><!-- .entry-meta -->
</article>