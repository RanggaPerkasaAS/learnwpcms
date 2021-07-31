<?php
/**
 * Service section
 *
 * This is the template for the content of service section
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */
if ( ! function_exists( 'tastypress_add_service_section' ) ) :
    /**
    * Add service section
    *
    *@since Top Travel Pro 1.0.0
    */
    function tastypress_add_service_section() {
        $options = tastypress_get_theme_options();
        // Check if service is enabled on frontpage
        $service_enable = apply_filters( 'tastypress_section_status', true, 'service_section_enable' );


        if ( true !== $service_enable ) {
            return false;
        }
        // Get service section details
        $section_details = array();
        $section_details = apply_filters( 'tastypress_filter_service_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render service section now.
        tastypress_render_service_section( $section_details );
    }
endif;

if ( ! function_exists( 'tastypress_get_service_section_details' ) ) :
    /**
    * service section details.
    *
    * @since Top Travel Pro 1.0.0
    * @param array $input service section details.
    */
    function tastypress_get_service_section_details( $input ) {
        $options = tastypress_get_theme_options();
        
        $content = array();

        $page_ids = array();

        for ( $i = 1; $i <= 3; $i++ ) {
            if ( ! empty( $options['service_content_page_' . $i] ) )
                $page_ids[] = $options['service_content_page_' . $i];
        }
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          => ( array ) $page_ids,
            'posts_per_page'    => 3,
            'orderby'           => 'post__in',
            );                    
    

        // Run The Loop.
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
                    $page_post['title']     = get_the_title();
                    $page_post['url']       = get_the_permalink();
                    $page_post['excerpt']   = tastypress_trim_content( $options['service_excerpt_length'] );
                    $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : '';

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
// service section content details.
add_filter( 'tastypress_filter_service_section_details', 'tastypress_get_service_section_details' );


if ( ! function_exists( 'tastypress_render_service_section' ) ) :
  /**
   * Start service section
   *
   * @return string service content
   * @since Top Travel Pro 1.0.0
   *
   */
   function tastypress_render_service_section( $content_details = array() ) {
        $options = tastypress_get_theme_options();
        $i = 1;        

        if ( empty( $content_details ) ) {
            return;
        } 
        ?> 
        
    <div id="our-services" class="col-3 page-section same-background">
        <div class="wrapper">
            <?php if ( is_customize_preview()):
            tastypress_section_tooltip( 'our-services' );
            endif; ?>
            <div class="section-header">
                <?php if( !empty( $options['service_sub_title'] ) ): ?>
                    <p class="section-subtitle"><?php echo esc_html( $options['service_sub_title'] ) ; ?></p>
                <?php endif; 
                if( !empty( $options['service_title'] ) ):
                ?>
                    <h2 class="section-title"><?php echo esc_html( $options['service_title'] ) ; ?></h2>
                <?php endif; ?>
            </div><!-- .section-header -->

            <div class="section-content">
                <?php foreach ( $content_details as $content ) : ?>
                    <article>
                        <div class="featured-image">
                            <a href="<?php echo esc_url( $content['url'] ); ?>"><img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>"></a>
                        </div>

                        <div class="entry-container">
                             <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                            </header>

                           <div class="entry-content">
                                <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                            </div><!-- .entry-content -->
                        </div>
                    </article>
                <?php endforeach; ?>
               
            </div>
        </div><!-- .wrapper -->
    </div><!-- #our-services -->      

    <?php }
endif;