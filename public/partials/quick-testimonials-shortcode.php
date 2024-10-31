<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to show the slider shortcode frontend view.
 *
 * @link       https://themeregion.com
 * @since      1.0.0
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/public/partials
 */

// Add Shortcode
function quick_testimonials_shortcode( $atts ) {


	// Attributes
	$atts = shortcode_atts(
		array(
			'id' => '',
		),
		$atts,
		''
	);

    $output = $qt_style_grid_col = $qt_style_grid_design = $qt_grid_style = $qt_style_content_alignment = $qt_style_image_shape = '';
    $qt_mgs = get_post_meta( $atts['id'], '_qt_settings_meta_information', true );
    $qt_mcf = get_post_meta( $atts['id'], '_qt_content_information', true );

    // Custom WP query qt_query
    $args_qt_query = array(
    	'post_type' => array('tr_testimonial'),
    	'post_status' => array('publish'),
    	'order' => 'DESC',
    	'p' => $atts['id'],
    );

    $qt_query = new WP_Query( $args_qt_query );

    if ( $qt_query->have_posts() ) {
    	while ( $qt_query->have_posts() ) {
    		$qt_query->the_post();

            // Getting all the styles from styling tab of metabox
            $qt_image               = $qt_mgs['qt_show_image'];
            $qt_title               = $qt_mgs['qt_show_name'];
            $qt_title_color         = $qt_mgs['qt_content_title_color'];
            $qt_position            = $qt_mgs['qt_show_position'];
            $qt_position_color      = $qt_mgs['qt_content_position_color'];
            $qt_quote               = $qt_mgs['qt_show_quote'];
            $qt_quote_color         = $qt_mgs['qt_content_quote_text_color'];
            $qt_quote_icon          = $qt_mgs['qt_show_quote_icon'];
            $qt_quote_icon_color    = $qt_mgs['qt_content_quote_icon_color'];
            $qt_rating              = $qt_mgs['qt_show_rating'];
            $qt_rating_color        = $qt_mgs['qt_content_star_rating_color'];
            $qt_wrapper_bg_color    = $qt_mgs['qt_content_wrapper_bg_color'];

            $qt_style_content_alignment     = $qt_mgs['qt_style_content_alignment'];
            $qt_style_image_shape           = $qt_mgs['qt_style_image_shape'];
            $qt_style_global_class          = 'quick-testimonials ' . $qt_mgs['qt_styling_global_class'];

			$output .= '<div class="'.$qt_style_global_class.'">';
            if ( $qt_mgs['qt_style'] == 'slider' ) :

                // Include the slider shortcode part
            	require_once( 'quick-testimonials-slider-shortcode.php' );

            elseif ( $qt_mgs['qt_style'] == 'grid' ) :

                // Include the grid shortcode part
            	require_once( 'quick-testimonials-grid-shortcode.php' );

            else :

                // Include the list shortcode part
            	require_once( 'quick-testimonials-list-shortcode.php' );

            endif;
			$output .= '</div>';
    	}
    }

	// Include the inline style & scripting file
	require_once( 'quick-testimonials-scriptsnstyles.php' );

    wp_reset_postdata();
    return $output;

}
add_shortcode( 'quick_testimonials', 'quick_testimonials_shortcode' );

?>
