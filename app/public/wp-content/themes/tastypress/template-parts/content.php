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
$class = has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail';
$options = tastypress_get_theme_options();
?>

<article <?php post_class( $class ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
            <a href="<?php the_permalink(); ?>" class="post-thumbnail-link"></a>
        </div><!-- .featured-image -->
    <?php endif; ?>

    <div class="entry-container">
        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>

        <div class="entry-meta">           
            <?php  tastypress_posted_on();?>
             <span class="cat-links">
                <?php the_category( ' ', '' ); ?>
            </span>
        </div><!-- .entry-meta -->

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div><!-- .entry-content -->
    </div><!-- .entry-container -->
</article>