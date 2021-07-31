<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Palace
 * @subpackage tastypress
 * @since tastypress 1.0.0
 */

/**
 * tastypress_footer_primary_content hook
 *
 * @hooked tastypress_add_contact_section -  10
 *
 */
do_action( 'tastypress_footer_primary_content' );

/**
 * tastypress_content_end_action hook
 *
 * @hooked tastypress_content_end -  10
 *
 */
do_action( 'tastypress_content_end_action' );

/**
 * tastypress_content_end_action hook
 *
 * @hooked tastypress_footer_start -  10
 * @hooked tastypress_Footer_Widgets->add_footer_widgets -  20
 * @hooked tastypress_footer_site_info -  40
 * @hooked tastypress_footer_end -  100
 *
 */
do_action( 'tastypress_footer' );

/**
 * tastypress_page_end_action hook
 *
 * @hooked tastypress_page_end -  10
 *
 */
do_action( 'tastypress_page_end_action' ); 

?>

<?php wp_footer(); ?>

</body>
</html>
