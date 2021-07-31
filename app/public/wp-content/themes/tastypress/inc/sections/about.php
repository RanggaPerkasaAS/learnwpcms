<?php
/**
 * about section
 *
 * This is the template for the content of about section
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */
if ( ! function_exists( 'tastypress_add_about_section' ) ) :
    /**
    * Add about section
    *
    *@since tastypress 1.0.0
    */
    function tastypress_add_about_section() {
        $options = tastypress_get_theme_options();
        
        // Check if about is enabled on frontpage
        $about_enable = apply_filters( 'tastypress_section_status', true, 'about_section_enable' );
        
        if ( true !== $about_enable ) {
            return false;
        }
        $section_details = array();

        // Get about section details
        $section_details = apply_filters( 'tastypress_filter_about_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }
        
        tastypress_render_about_section( $section_details );

    }
endif;

if ( ! function_exists( 'tastypress_get_about_section_details' ) ) :
    /**
    * about section details.
    *
    * @since tastypress 1.0.0
    * @param array $input about section details.
    */
    function tastypress_get_about_section_details( $input ) {
        $options = tastypress_get_theme_options();

        // Content type.
        $about_content_type  = $options['about_content_type'];
        
        $content = array();
        switch ( $about_content_type ) {
            

            case 'page':
                $page_id = ! empty( $options['about_content_page'] ) ? $options['about_content_page'] : '';
                $args = array(
                    'post_type'         => 'page',
                    'page_id'           => $page_id,
                    'posts_per_page'    => 1,
                    );                    
            break;

            case 'product':
   
                $page_id = $options['about_content_product'];
     
                $args = array(
                    'post_type'         => 'product',
                    'p'          => $page_id,
                    'posts_per_page'    => 1,
                    );
            break;


            default:
            break;
        }

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['id']        = get_the_id();
                $page_post['excerpt']   = tastypress_trim_content( $options['about_excerpt_length'] );
                $page_post['url']       = get_the_permalink();
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
// about section content details.
add_filter( 'tastypress_filter_about_section_details', 'tastypress_get_about_section_details' );


if ( ! function_exists( 'tastypress_render_about_section' ) ) :
  /**
   * Start about section
   *
   * @return string about content
   * @since tastypress 1.0.0
   *
   */
   function tastypress_render_about_section( $content_details = array() ) {
        $options = tastypress_get_theme_options();
        $about_btn_title = ! empty( $options['about_btn_title'] ) ? $options['about_btn_title'] : '';

        $content = $content_details[0];
        if ( empty( $content_details ) ) {
            return;
        } 
        ?>

        <div id="about-us" class="about page-section">
            <div class="wrapper">
                <?php if ( is_customize_preview()):
                tastypress_section_tooltip( 'about-class' );
                endif; ?>
                <article class="has-post-thumbnail">
                    <div class="featured-image">
                        <a href="<?php echo esc_url($content['url']); ?>"><img src="<?php echo esc_url($content['image']); ?>" alt="hero-banner"></a>
                    </div>

                    <div class="entry-container">
                        <div class="section-header">
                            <p class="section-subtitle"><?php echo esc_html( $options['about_sub_title'] ) ; ?></p>
                            <h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo esc_html($content['title']); ?></a></h2>
                        </div><!-- .section-header -->

                        <div class="entry-content">
                            <p><?php echo wp_kses_post($content['excerpt']); ?></p>
                        </div><!-- .entry-content -->
                        <?php if ( $options['about_content_type'] == 'product' ): ?>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <?php 
                                        $featured_product = new WC_Product( $content['id'] );
                                        echo $featured_product->get_price_html();
                                    ?>                                            
                                </span>
                            </span>
                        <?php endif ?>
                       

                        <div class="read-more">
                            <a href="<?php echo esc_url($content['url']); ?>" class="btn">
                                <?php echo esc_html( $about_btn_title ) ?>
                                <svg viewBox="0 0 512 512">
                                    <path d="M508.875,248.458l-160-160c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083l141.792,141.792
                                    H10.667C4.771,245.333,0,250.104,0,256s4.771,10.667,10.667,10.667h464.917L333.792,408.458c-4.167,4.167-4.167,10.917,0,15.083
                                    c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z
                                    "></path>
                                </svg>
                            </a>
                        </div><!-- .read-more -->
                    </div><!-- .entry-container -->
                </article>
            </div><!-- .wrapper -->
        </div><!-- #featured-food -->
    
        <?php 
    }
endif;