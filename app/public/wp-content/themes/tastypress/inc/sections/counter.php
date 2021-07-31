<?php
/**
 * Counter section
 *
 * This is the template for the content of counter section
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */
if ( ! function_exists( 'tastypress_add_counter_section' ) ) :
    /**
    * Add counter section
    *
    *@since tastypress 1.0.0
    */
    function tastypress_add_counter_section() {
        $options = tastypress_get_theme_options();
        // Check if counter is enabled on frontpage
        $counter_enable = apply_filters( 'tastypress_section_status', true, 'counter_section_enable' );
        

        if ( true !== $counter_enable ) {
            return false;
        }

        // Render counter section now.
        tastypress_render_counter_section();
    }
endif;

if ( ! function_exists( 'tastypress_render_counter_section' ) ) :
  /**
   * Start counter section
   *
   * @return string counter content
   * @since tastypress 1.0.0
   *
   */
   function tastypress_render_counter_section() {
        $options = tastypress_get_theme_options();
        $image   = empty( $options['counter_image'] ) ? '' : $options['counter_image'] ;
        $subtitle   = empty( $options['counter_sub_title'] ) ? '' : $options['counter_sub_title'] ;
        $title   = empty( $options['counter_title'] ) ? '' : $options['counter_title'] ;
        $contents = array();

         for( $i= 1; $i <= 3 ; $i++ ){
            
            $page_post['title']     = empty( $options['counter_title_'.$i] ) ? '' :$options['counter_title_'.$i];
            $page_post['number']    = empty( $options['counter_number_'.$i] ) ? '' :$options['counter_number_'.$i];
            $page_post['content']    = empty( $options['counter_content_'.$i] ) ? '' :$options['counter_content_'.$i];
            array_push( $contents, $page_post );
        }
       
        ?>
        <div id="counter" class="page-section">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/uploads/shadow-01.png' ) ?>" alt="bg" class="bg">
            <div class="wrapper">
                <?php if ( is_customize_preview()):
                tastypress_section_tooltip( 'counter' );
                endif; ?>
                <div class="section-header">
                    <p class="section-subtitle"><?php echo esc_html( $subtitle ); ?></p>
                    <h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
                </div><!-- .section-header -->

                <div class="section-content col-3">
                    <?php foreach ( $contents as $content ): ?>
                        <article>
                            <div class="counter-item">
                                <h2 class="counter-value"><?php echo esc_html( $content['number'] ); ?></h2>
                                <h3 class="counter-title"><?php echo esc_html( $content['title'] ); ?></h3>
                            </div><!-- .counter-item -->
                        </article>
                    <?php endforeach; ?>
                    
                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div><!-- #counter -->
      

    <?php }
endif;
