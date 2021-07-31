<?php
/**
 * Testimonial section
 *
 * This is the template for the content of testimonial section
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */
if ( ! function_exists( 'tastypress_add_testimonial_section' ) ) :
    /**
    * Add testimonial section
    *
    *@since tastypress 1.0.0
    */
    function tastypress_add_testimonial_section() {
        $options = tastypress_get_theme_options();
        // Check if testimonial is enabled on frontpage
        $testimonial_enable = apply_filters( 'tastypress_section_status', true, 'testimonial_section_enable' );

        if ( true !== $testimonial_enable ) {
            return false;
        }
        // Get testimonial section details
        $section_details = array();
        $section_details = apply_filters( 'tastypress_filter_testimonial_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render testimonial section now.
        tastypress_render_testimonial_section( $section_details );
    }
endif;

if ( ! function_exists( 'tastypress_get_testimonial_section_details' ) ) :
    /**
    * testimonial section details.
    *
    * @since tastypress 1.0.0
    * @param array $input testimonial section details.
    */
    function tastypress_get_testimonial_section_details( $input ) {
        $options = tastypress_get_theme_options();

        // Content type.
        $testimonial_content_type   = $options['testimonial_content_type'];
        $testimonial_count          = ! empty( $options['testimonial_count'] ) ? $options['testimonial_count'] : 4;
        $content = array();
     
        $page_ids = array();
        $author = array();

        for ( $i = 1; $i <= $testimonial_count; $i++ ) {
            if ( ! empty( $options['testimonial_content_page_' . $i] ) ) :
                $page_ids[] = $options['testimonial_content_page_' . $i];
            endif;
        }
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          => ( array ) $page_ids,
            'posts_per_page'    => absint( $testimonial_count ),
            'orderby'           => 'post__in',
            );         
        
            
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = tastypress_trim_content( $options['testimonial_excerpt_length'] );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'large' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// testimonial section content details.
add_filter( 'tastypress_filter_testimonial_section_details', 'tastypress_get_testimonial_section_details' );


if ( ! function_exists( 'tastypress_render_testimonial_section' ) ) :
  /**
   * Start testimonial section
   *
   * @return string testimonial content
   * @since tastypress 1.0.0
   *
   */
   function tastypress_render_testimonial_section( $content_details = array() ) {
        $options = tastypress_get_theme_options();

        $testimonial_title     = ! empty( $options['testimonial_title'] ) ? $options['testimonial_title'] : '';
        $testimonial_sub_title = ! empty( $options['testimonial_sub_title'] ) ? $options['testimonial_sub_title'] : '';

        $testimonial_position = ! empty( $options['testimonial_position'] ) ? $options['testimonial_position'] : '';

        $testimonial_auto_play    = ($options['testimonial_auto_play'] == true ) ? 'true' : 'false';
        
        if ( empty( $content_details ) ) {
            return;
        } ?>
        <div id="testimonial" class="page-section same-background">
            <div class="wrapper">
                <?php if ( is_customize_preview()):
                tastypress_section_tooltip( 'testimonial' );
                endif; ?>
                <div class="section-header">
                    <p class="section-subtitle"><?php echo esc_html( $testimonial_sub_title ); ?></p>
                    <h2 class="section-title"><?php echo esc_html( $testimonial_title ); ?></h2>
                </div><!-- .section-header -->

                <div class="sticky-post-wrapper">
                    <?php  $i=1; foreach($content_details as $content): ?> 
                        <?php if ( $i > 1 ): break; endif ; ?>
                        <article class="has-post-thumbnail">
                            <div class="testimonial-wrapper">
                                <div class="entry-container">  
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo esc_html($content['title']); ?></a></h2>
                                    </header><!-- .entry-header -->

                                    <div class="client-image">
                                        <a href="<?php echo esc_url($content['url']); ?>"><img src="<?php echo esc_url($content['image']); ?>" alt="hero-banner"></a>
                                        <?php if ( array_key_exists( 'testimonial_position_'.$i , $options ) ): ?>
                                            <h2 class="author-title"><?php echo esc_html( $options['testimonial_position_'.$i] ); ?></h2> 
                                        <?php endif ?>
                                        
                                    </div><!-- .client-image -->

                                    <div class="entry-content">
                                        <p><?php echo wp_kses_post($content['excerpt']); ?></p>
                                    </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .testimnial-wrapper -->
                        </article><!-- article -->
                        
                    <?php $i++; endforeach; ?>
                    
                </div><!-- sticky-post-wrapper -->

                <div class="post-wrapper">
                    <?php $i=1; foreach($content_details as $content): ?> 
                        <?php if ( $i > 1 ): ?>
                            <article>
                                <div class="entry-container">  
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo esc_attr($content['url']); ?>"><?php echo esc_html($content['title']); ?></a>
                                        </h2>
                                        <p class="position"><?php echo esc_html( $options['testimonial_position_'.$i] ); ?></p> 
                                    </header><!-- .entry-header -->

                                    <div class="icon">
                                        <svg viewBox="0 0 512 512">
                                            <path d="M508.875,248.458l-160-160c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083l141.792,141.792
                                            H10.667C4.771,245.333,0,250.104,0,256s4.771,10.667,10.667,10.667h464.917L333.792,408.458c-4.167,4.167-4.167,10.917,0,15.083
                                            c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z
                                            "></path>
                                        </svg>
                                    </div><!-- .entry-container -->
                                </div><!-- .entry-container -->
                            </article>
                        <?php endif ?>
                        
                    <?php $i++; endforeach; ?>
                 
                </div><!-- .post-wrapper -->
            </div><!-- .wrapper -->
        </div><!-- #featured-food -->
     
    <?php }
endif;
