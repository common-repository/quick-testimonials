<?php

if ( $qt_mgs['qt_style'] == 'slider' ) :
    // Slider settings
    // Navigation Color
    $qt_slider_nav_enabler               = $qt_mgs['qt_show_slider_nav'];
    $qt_slider_nav_color                 = $qt_mgs['qt_slider_arrow_color'];
    $qt_slider_nav_hover                 = $qt_mgs['qt_slider_arrow_hover_color'];
    $qt_slider_nav_bg                    = $qt_mgs['qt_slider_arrow_bg_color'];
    $qt_slider_nav_bg_hover              = $qt_mgs['qt_slider_arrow_bg_hover_color'];
    $qt_slider_arrow_border_color        = $qt_mgs['qt_slider_arrow_border_color'];
    $qt_slider_arrow_border_hover_color  = $qt_mgs['qt_slider_arrow_border_hover_color'];
    // Dots Color
    $qt_slider_dot_enabler               = $qt_mgs['qt_show_slider_dot'];
    $qt_slider_dots_bg_color             = $qt_mgs['qt_slider_dots_bg_color'];
    $qt_slider_dots_bg_active_color      = $qt_mgs['qt_slider_dots_bg_active_color'];
    $qt_slider_dots_border_color         = $qt_mgs['qt_slider_dots_border_color'];
    $qt_slider_dots_border_active_color  = $qt_mgs['qt_slider_dots_border_active_color'];
    // Slider Style 7 Icon Background Color
    $qt_icon_left_color = $qt_mgs['qt_icon_left_color'];
    $qt_icon_right_color = $qt_mgs['qt_icon_right_color'];
endif;



// Include inline styles here
$output .= '<style>';

if ( !empty( $qt_mgs['qt_style_custom_css'] ) ) :
$output .= $qt_mgs['qt_style_custom_css'];
endif;

if( $qt_title ) :
    $font_family = ( $qt_mgs['qt_name_typo']['font-family'] != '' ) ? 'font-family:'.$qt_mgs['qt_name_typo']['font-family'].'!important;' : '';
    $font_weight = ( $qt_mgs['qt_name_typo']['font-weight'] != '' ) ? 'font-weight:'.$qt_mgs['qt_name_typo']['font-weight'].'!important;' : '';
    $text_tranform = ( $qt_mgs['qt_name_typo']['text-transform'] != '' ) ? 'text-transform:'.$qt_mgs['qt_name_typo']['text-transform'].'!important;' : '';
    $font_size = ( $qt_mgs['qt_name_typo']['font-size'] != '' ) ? 'font-size:'.$qt_mgs['qt_name_typo']['font-size'].'px!important;' : '';
    $line_height = ( $qt_mgs['qt_name_typo']['line-height'] != '' ) ? 'line-height:'.$qt_mgs['qt_name_typo']['line-height'].'px!important;' : '';
    $letter_spacing = ( $qt_mgs['qt_name_typo']['letter-spacing'] != '' ) ? 'letter-spacing:'.$qt_mgs['qt_name_typo']['letter-spacing'].'px!important;' : '';
    $nameTypo = $font_family.$font_weight.$text_tranform.$font_size.$line_height.$letter_spacing;

    $output .= '.tr-author-info span.tr-title { color: '.$qt_title_color.' !important; '.$nameTypo.' }';
endif;
if( $qt_position ) :
    $font_family = ( $qt_mgs['qt_position_typo']['font-family'] != '' ) ? 'font-family:'.$qt_mgs['qt_position_typo']['font-family'].'!important;' : '';
    $font_weight = ( $qt_mgs['qt_position_typo']['font-weight'] != '' ) ? 'font-weight:'.$qt_mgs['qt_position_typo']['font-weight'].'!important;' : '';
    $text_tranform = ( $qt_mgs['qt_position_typo']['text-transform'] != '' ) ? 'text-transform:'.$qt_mgs['qt_position_typo']['text-transform'].'!important;' : '';
    $font_size = ( $qt_mgs['qt_position_typo']['font-size'] != '' ) ? 'font-size:'.$qt_mgs['qt_position_typo']['font-size'].'px!important;' : '';
    $line_height = ( $qt_mgs['qt_position_typo']['line-height'] != '' ) ? 'line-height:'.$qt_mgs['qt_position_typo']['line-height'].'px!important;' : '';
    $letter_spacing = ( $qt_mgs['qt_position_typo']['letter-spacing'] != '' ) ? 'letter-spacing:'.$qt_mgs['qt_position_typo']['letter-spacing'].'px!important;' : '';
    $positionTypo = $font_family.$font_weight.$text_tranform.$font_size.$line_height.$letter_spacing;

    $output .= '.tr-author-info span { color: '.$qt_position_color.' !important; '.$positionTypo.'}';
endif;
if( $qt_quote ) :
    $font_family = ( $qt_mgs['qt_content_typo']['font-family'] != '' ) ? 'font-family:'.$qt_mgs['qt_content_typo']['font-family'].'!important;' : '';
    $font_weight = ( $qt_mgs['qt_content_typo']['font-weight'] != '' ) ? 'font-weight:'.$qt_mgs['qt_content_typo']['font-weight'].'!important;' : '';
    $text_tranform = ( $qt_mgs['qt_content_typo']['text-transform'] != '' ) ? 'text-transform:'.$qt_mgs['qt_content_typo']['text-transform'].'!important;' : '';
    $font_size = ( $qt_mgs['qt_content_typo']['font-size'] != '' ) ? 'font-size:'.$qt_mgs['qt_content_typo']['font-size'].'px!important;' : '';
    $line_height = ( $qt_mgs['qt_content_typo']['line-height'] != '' ) ? 'line-height:'.$qt_mgs['qt_content_typo']['line-height'].'px!important;' : '';
    $letter_spacing = ( $qt_mgs['qt_content_typo']['letter-spacing'] != '' ) ? 'letter-spacing:'.$qt_mgs['qt_content_typo']['letter-spacing'].'px!important;' : '';
    $contentTypo = $font_family.$font_weight.$text_tranform.$font_size.$line_height.$letter_spacing;

    $output .= '.tr-testimonial .tr-testimonial-description { color: '.$qt_quote_color.' !important; '.$contentTypo.'}';
    if( isset( $qt_style_slider_design ) && $qt_style_slider_design == 'style-7' ) :
        $output .= '
        .tr-icon-style-1 {
            background-color: '.$qt_icon_left_color.';
        }        
        .tr-icon-style-1:before {
            background-color: '.$qt_icon_right_color.';
        }        
        .tr-icon-style-1:after {
            border-left: 15px solid '.$qt_icon_left_color.';
        }
        ';
    endif;
endif;
if( $qt_quote_icon ) :
    $output .= '.tr-testimonial-icon { color: '.$qt_quote_icon_color.' !important}';
endif;
if( $qt_rating ) :
    $output .= '.tr-testimonial-ratings li { color: '.$qt_rating_color.' !important}';
endif;
if ( !empty( $qt_wrapper_bg_color ) ) :
    $output .= '.tr-testimonial{ background-color: '.$qt_wrapper_bg_color.' !important}';
endif;

// Slider Navigation Style
if( $qt_mgs['qt_style'] == 'slider' ) :
    if ( $qt_slider_nav_enabler ) :
        if ( !empty( $qt_slider_nav_color ) ) :
            // Arrow Color
            $output .= '
            .tr-arrow-3 .slick-arrow,
            .tr-arrow-9 .slick-arrow,
            .tr-arrow-1 .slick-arrow,
            .tr-arrow-10 .slick-arrow,
            .tr-arrow-11 .slick-arrow,
            .tr-arrow-4 .slick-arrow,
            .tr-arrow-4 .slick-arrow,
            .tr-arrow-11 .slick-arrow,
            .tr-arrow-7 .slick-arrow:after,
            .tr-arrow-8 .slick-arrow:after {
                color: '.$qt_slider_nav_color.'!important;
            }
            ';
        endif;
        // Arrow Hover Color
        $output .= '
        .slick-arrow:hover,
        .tr-arrow-2 .slick-arrow:hover,
        .tr-arrow-12 .slick-arrow:hover,
        .tr-arrow-1 .slick-arrow:hover,
        .tr-arrow-10 .slick-arrow:hover,
        .tr-arrow-6 .slick-arrow:hover {
            color: '.$qt_slider_nav_color.'!important;
            background-color: '.$qt_slider_nav_bg_hover.'!important;
        }
        ';

        if ( !empty( $qt_slider_nav_bg ) ) :
            // Arrow Background color
            $output .= '
            .tr-arrow-1 .slick-arrow,
            .tr-arrow-10 .slick-arrow,
            .tr-arrow-8 .slick-arrow,
            .tr-arrow-6 .slick-arrow {
                background-color: '.$qt_slider_nav_bg.'!important;
            }
            ';
        endif;

        if ( !empty( $qt_slider_nav_bg_hover ) ) :
            // Arrow Background Hover Color
            $output .= '
            .tr-arrow-7 .slick-arrow:hover,
            .tr-arrow-3 .slick-arrow:hover,
            .tr-arrow-9 .slick-arrow:hover,
            .tr-arrow-4 .slick-arrow:hover,
            .tr-arrow-11 .slick-arrow:hover,
            .tr-arrow-5 .slick-arrow:hover {
                background-color: '.$qt_slider_nav_bg_hover.'!important;
            }
            ';
        endif;

        if ( !empty( $qt_slider_arrow_border_color ) ) :
            // Arrow Border Color
            $output .= '
            .tr-arrow-5 .slick-arrow,
            .tr-arrow-6 .slick-arrow,
            .tr-arrow-7 .slick-arrow,
            .tr-arrow-8 .slick-arrow,
            .tr-arrow-3 .slick-arrow,
            .tr-arrow-9 .slick-arrow,
            .tr-arrow-1 .slick-arrow,
            .tr-arrow-10 .slick-arrow,
            .tr-arrow-11 .slick-arrow,
            .tr-arrow-4 .slick-arrow,
            .tr-arrow-2 .slick-arrow:after,
            .tr-arrow-12 .slick-arrow:after,
            .tr-arrow-3 .slick-arrow:after,
            .tr-arrow-9 .slick-arrow:after,
            .tr-arrow-7 .slick-arrow:after,
            .tr-arrow-8 .slick-arrow:after {
                border-color:  '.$qt_slider_arrow_border_color.'!important;
            }
            ';
        endif;

        if ( !empty( $qt_slider_arrow_border_hover_color ) ) :
            // Arrow Border Color
            $output .= '
            .tr-arrow-5 .slick-arrow:hover,
            .tr-arrow-6 .slick-arrow:hover,
            .tr-arrow-7 .slick-arrow:hover,
            .tr-arrow-8 .slick-arrow:hover,
            .tr-arrow-3 .slick-arrow:hover,
            .tr-arrow-9 .slick-arrow:hover,
            .tr-arrow-1 .slick-arrow:hover,
            .tr-arrow-10 .slick-arrow:hover,
            .tr-arrow-11 .slick-arrow:hover,
            .tr-arrow-4 .slick-arrow:hover,
            .tr-arrow-7 .slick-arrow::hover:after,
            .tr-arrow-8 .slick-arrow::hover:after {
                border-color:  '.$qt_slider_arrow_border_hover_color.'!important;
            }
            ';
        endif;
    endif;

    if ( $qt_slider_dot_enabler ) :
        if ( !empty( $qt_slider_dots_bg_color ) ) :
            // Dots Background Color
            $output .= '
            .tr-dots-1 .slick-dots li button,
            .tr-dots-2 .slick-dots li button,
            .tr-dots-3 .slick-dots li button,
            .tr-dots-4 .slick-dots li button {
                background-color: '.$qt_slider_dots_bg_color.'!important;
            }
            ';
        endif;
        if ( !empty( $qt_slider_dots_bg_active_color ) ) :
            // Dots Background Active Color
            $output .= '
            .tr-dots-1 .slick-dots li.slick-active button,
            .tr-dots-1 .slick-dots li:hover button,
            .tr-testimonial .slick-dots li button:hover,
            .tr-dots-3 .slick-dots li.slick-active button,
            .tr-dots-3 .slick-dots li:hover button,
            .tr-dots-2 .slick-dots li.slick-active button,
            .tr-dots-2 .slick-dots li:hover button,
            .tr-dots-4 .slick-dots li button:hover, 
            .tr-dots-4 .slick-dots li.slick-active button {
                background-color: '.$qt_slider_dots_bg_active_color.'!important;
            }
            ';
        endif;

        if ( !empty( $qt_slider_dots_border_color ) ) :
            // Dots Border Color
            $output .= '
            .slick-dots li button {
                border-color: '.$qt_slider_dots_border_color.'!important;
            }
            ';
        endif;
        if ( !empty( $qt_slider_dots_border_active_color ) ) :
            // Dots Border Active Color
            $output .= '
            .tr-dots-2 .slick-dots li.slick-active button:after,
            .tr-dots-2 .slick-dots li:hover button:after,
            .tr-dots-3 .slick-dots li button:after {
                border-color: '.$qt_slider_dots_border_active_color.'!important;
            }
            ';
        endif;
    endif;
endif;

$output .= '</style>';

if ( $qt_mgs['qt_style'] == 'slider' ) :
    $slideContent = ( sizeof( $qt_mcf['qt_client_contents'] ) <= 5 ) ? sizeof( $qt_mcf['qt_client_contents'] ) : 5;
    // Slider scripting here
    $output .= '<script>';
    if ( $qt_style_slider_design == 'style-1' ) :
        $output .= 'jQuery(".tr-slider-nav").slick({';
            $output .= 'slidesToShow: '. $slideContent .',';
            $output .= 'slidesToScroll: 1,';
            $output .= 'asNavFor: ".tr-slider-1",';
            $output .= 'dots: false,';
            $output .= 'arrows: false,';
            $output .= 'focusOnSelect: true,';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 1200,';
                    $output .= 'settings: {slidesToShow: 4,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 992,';
                    $output .= 'settings: {slidesToShow: 3,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';

    elseif ( $qt_style_slider_design == 'style-2' ) :
        $output .= 'jQuery(".tr-slider-nav-2").slick({';
            $output .= 'slidesToShow: '. $slideContent .',';
            $output .= 'slidesToScroll: 1,';
            $output .= 'asNavFor: ".tr-slider-2",';
            $output .= 'dots: false,';
            $output .= 'arrows: false,';
            $output .= 'focusOnSelect: true,';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 1200,';
                    $output .= 'settings: {slidesToShow: 4,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 992,';
                    $output .= 'settings: {slidesToShow: 3,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';

    elseif ( $qt_style_slider_design == 'style-3' ) :
        $output .= 'jQuery(".tr-slider-nav-3").slick({';
            $output .= 'slidesToShow: '. $slideContent .',';
            $output .= 'slidesToScroll: 1,';
            $output .= 'asNavFor: ".tr-slider-3",';
            $output .= 'dots: false,';
            $output .= 'arrows: false,';
            $output .= 'focusOnSelect: true,';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 3,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';

    elseif ( $qt_style_slider_design == 'style-4' ) :
        $output .= 'jQuery(".tr-slider-4").slick({';
            $output .= 'slidesToShow: 1,';
            $output .= 'slidesToScroll: 1,';
        if( $qt_slider_nav_enabler ) :
            $output .= 'arrows: true,';
        else:
            $output .= 'arrows: false,';
        endif;
            $output .= 'asNavFor: ".tr-slider-nav-4",';
            $output .= 'nextArrow: "<i class=\'fa fa-angle-left\' aria-hidden=\'true\'></i>",';
            $output .= 'prevArrow: "<i class=\'fa fa-angle-right\' aria-hidden=\'true\'></i>",';
        $output .= '});';
        $output .= 'jQuery(".tr-slider-nav-4").slick({';
            $output .= 'slidesToShow: 3,';
            $output .= 'slidesToScroll: 1,';
            $output .= 'asNavFor: ".tr-slider-4",';
            $output .= 'dots: false,';
            $output .= 'arrows: false,';
            $output .= 'focusOnSelect: true,';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 1,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';
    elseif ( $qt_style_slider_design == 'style-5' ) :
        $output .= 'jQuery(".tr-slider-5").slick({';
            $output .= 'infinite: true,';
            $output .= 'slidesToShow: 1,';
            $output .= 'slidesToScroll: 1,';
            $output .= 'autoplay: true,';
            $output .= 'autoplaySpeed: 10000,';
        if( $qt_slider_dot_enabler ) :
            $output .= 'dots: true,';
        else:
            $output .= 'dots: false,';
        endif;
        if( $qt_slider_nav_enabler ) :
            $output .= 'arrows: true,';
        else:
            $output .= 'arrows: false,';
        endif;
            $output .= 'nextArrow: "<i class=\'fa fa-angle-left\' aria-hidden=\'true\'></i>",';
            $output .= 'prevArrow: "<i class=\'fa fa-angle-right\' aria-hidden=\'true\'></i>",';
        $output .= '});';
    elseif ( $qt_style_slider_design == 'style-6' ) :
        $output .= 'jQuery(".tr-slider-6").slick({';
            $output .= 'infinite: true,';
            $output .= 'slidesToShow: 3,';
            $output .= 'slidesToScroll: 1,';
            $output .= 'centerMode: true,';
            $output .= 'autoplay: true,';
            $output .= 'autoplaySpeed: 10000,';
        if( $qt_slider_dot_enabler ) :
            $output .= 'dots: true,';
        else:
            $output .= 'dots: false,';
        endif;
        if( $qt_slider_nav_enabler ) :
            $output .= 'arrows: true,';
        else:
            $output .= 'arrows: false,';
        endif;
            $output .= 'nextArrow: "<i class=\'fa fa-angle-left\' aria-hidden=\'true\'></i>",';
            $output .= 'prevArrow: "<i class=\'fa fa-angle-right\' aria-hidden=\'true\'></i>",';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 992,';
                    $output .= 'settings: {slidesToShow: 1,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 1,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';
    elseif ( $qt_style_slider_design == 'style-7' ) :
        $output .= 'jQuery(".tr-slider-7").slick({';
            $output .= 'infinite: true,';
            $output .= 'autoplay:true,';
            $output .= 'autoplaySpeed:10000,';
            $output .= 'slidesToShow: 2,';
            $output .= 'slidesToScroll: 2,';
        if( $qt_slider_nav_enabler ) :
            $output .= 'arrows: true,';
        else:
            $output .= 'arrows: false,';
        endif;
        if( $qt_slider_dot_enabler ) :
            $output .= 'dots: true,';
        else:
            $output .= 'dots: false,';
        endif;
            $output .= 'nextArrow: "<i class=\'fa fa-angle-left\' aria-hidden=\'true\'></i>",';
            $output .= 'prevArrow: "<i class=\'fa fa-angle-right\' aria-hidden=\'true\'></i>",';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 1, slidesToScroll: 1}';
                $output .= '}';
            $output .= ']';
        $output .= '});';   
    elseif ( $qt_style_slider_design == 'grid-2' ) :
        $output .= 'jQuery(".tr-slider-grid-2 .tr-grid-slider").slick({';
            $output .= 'infinite: true,';
            $output .= 'slidesToShow: 2,';
            $output .= 'slidesToScroll: 2,';
            $output .= 'autoplay: true,';
            $output .= 'autoplaySpeed: 10000,';
        if( $qt_slider_dot_enabler ) :
            $output .= 'dots: true,';
        else:
            $output .= 'dots: false,';
        endif;
            $output .= 'dots: false,';
        if( $qt_slider_nav_enabler ) :
            $output .= 'arrows: true,';
        else:
            $output .= 'arrows: false,';
        endif;
            $output .= 'nextArrow: "<i class=\'fa fa-angle-left\' aria-hidden=\'true\'></i>",';
            $output .= 'prevArrow: "<i class=\'fa fa-angle-right\' aria-hidden=\'true\'></i>",';
            $output .= 'responsive: [';
                $output .= '{';
                    $output .= 'breakpoint: 992,';
                    $output .= 'settings: {slidesToShow: 1,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 768,';
                    $output .= 'settings: {slidesToShow: 1,}';
                $output .= '},';
                $output .= '{';
                    $output .= 'breakpoint: 481,';
                    $output .= 'settings: {slidesToShow: 2,}';
                $output .= '}';
            $output .= ']';
        $output .= '});';
    endif;
    $output .= '</script>';
endif;

?>
