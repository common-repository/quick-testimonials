<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to show the grid shortcode frontend view..
 *
 * @link       https://themeregion.com
 * @since      1.0.0
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/public/partials
 */


				if ( $qt_mgs['qt_style_list_design'] == 'style-1' ) {
					$qt_style_list_design = 'tr-list-style-2';
				} elseif( $qt_mgs['qt_style_list_design'] == 'style-2' ) {
					if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-after-quote' )
						$qt_style_list_design = 'tr-style-13';
					else
						$qt_style_list_design = 'tr-style-9';
				} else {
					$qt_style_list_design 	= 'tr-style-11';
				}

                $output .= '<div class="tr-list-style">';
                    $output .= '<div class="tr-testimonial-content">';
                        foreach ($qt_mcf['qt_client_contents'] as $content) :
                            $output .= '<div class="tr-testimonial '.$qt_style_list_design.' '.$qt_style_content_alignment.'">';
                            switch ( $qt_style_list_design ) {
                                case 'tr-list-style-2':
                               
                                if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-before-quote' ) :
                                    $imgContentPositionIndicator = str_replace( "tr-", '', $qt_mgs['qt_style_grid_img_pos'] );
                                else :
                                    $imgContentPositionIndicator = '';
                                endif;

                                    if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-after-quote' ) :
                                        if( $qt_quote_icon ) :
                                            $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                        endif;
                                        if( $qt_quote ) :
                                            $output .= '<div class="tr-testimonial-description '.$imgContentPositionIndicator.'"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                                        endif;
                                    endif;
                                        $output .= '<div class="tr-testimonial-author">';
                                        if( $qt_image ) :
                                            $output .= '<div class="tr-author-image '.$qt_style_image_shape.' '.$qt_mgs['qt_style_list_img_pos'].'"><img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'"></div>';
                                        endif;
                                            $output .= '<div class="tr-author-info">';
                                            if( $qt_title ) :
                                                $output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
                                            endif;
                                            if( $qt_position ) :
                                                $output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
                                            endif;
                                            if( $qt_rating ) :
                                                $output .= '<div class="tr-testimonial-ratings"><ul>';
                                                for ($i=0; $i < $content['qt_client_contents_rating'] ; $i++) :
                                                    $output .= '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                                endfor;
                                                $output .= '</ul></div>';
                                            endif;
                                            $output .= '</div>';
                                        $output .= '</div>';
                                    if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-before-quote' ) :
                                        if( $qt_quote_icon ) :
                                            $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                        endif;
                                        if( $qt_quote ) :
                                            $output .= '<div class="tr-testimonial-description '.$imgContentPositionIndicator.'"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                                        endif;
                                    endif;
                                    break;

                                case 'tr-style-11':
                                if( $qt_image && $qt_mgs['qt_style_list_2_auth_posv2'] != 'tr-after-image' ) :
                                    $output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
                                        $output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
                                    $output .= '</div>';
                                endif;
                                if ( $qt_mgs['qt_style_list_2_auth_posv2'] == 'tr-after-image' ) :
                                    $output .= '<div class="tr-author-info">';
                                    if( $qt_image ) :
                                        $output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
                                            $output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
                                        $output .= '</div>';
                                    endif;
                                    if( $qt_rating ) :
                                        $output .= '<div class="tr-testimonial-ratings"><ul>';
                                        for ($i=0; $i < $content['qt_client_contents_rating'] ; $i++) :
                                            $output .= '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                        endfor;
                                        $output .= '</ul></div>';
                                    endif;
                                    if( $qt_title ) :
                                        $output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
                                    endif;
                                    if( $qt_position ) :
                                        $output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
                                    endif;
                                    $output .= '</div>';
                                endif;
                                    $output .= '<div class="tr-testimonial-description">';
                                    if ( $qt_mgs['qt_style_list_2_auth_posv2'] == 'tr-before-quote' ) :
                                        $output .= '<div class="tr-author-info">';
                                        if( $qt_rating ) :
                                            $output .= '<div class="tr-testimonial-ratings"><ul>';
                                            for ($i=0; $i < $content['qt_client_contents_rating'] ; $i++) :
                                                $output .= '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                            endfor;
                                            $output .= '</ul></div>';
                                        endif;
                                        if( $qt_title ) :
                                            $output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
                                        endif;
                                        if( $qt_position ) :
                                            $output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
                                        endif;
                                        $output .= '</div>';
                                    endif;
                                        if( $qt_quote_icon ) :
                                            $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                        endif;
                                        if( $qt_quote ) :
                                            $output .= '<p>'. $content['qt_client_contents_quote'] .'</p>';
                                        endif;
                                    if ( $qt_mgs['qt_style_list_2_auth_posv2'] == 'tr-after-quote' ) :
                                        $output .= '<div class="tr-author-info">';
                                        if( $qt_rating ) :
                                            $output .= '<div class="tr-testimonial-ratings"><ul>';
                                            for ($i=0; $i < $content['qt_client_contents_rating'] ; $i++) :
                                                $output .= '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                            endfor;
                                            $output .= '</ul></div>';
                                        endif;
                                        if( $qt_title ) :
                                            $output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
                                        endif;
                                        if( $qt_position ) :
                                            $output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
                                        endif;
                                        $output .= '</div>';
                                    endif;
                                    $output .= '</div>';
                                    break;

                                case 'tr-style-9':
                                case 'tr-style-13':

                                    if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-after-quote' ) :
                                        if( $qt_quote_icon ) :
                                            $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                        endif;
                                        if( $qt_quote ) :
                                            $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                                        endif;
                                    endif;
                                        $output .= '<div class="tr-testimonial-author">';
                                        if( $qt_image ) :
                                            $output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
                                                $output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
                                            $output .= '</div>';
                                        endif;
                                            $output .= '<div class="tr-author-info">';
                                            if( $qt_title ) :
                                                $output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
                                            endif;
                                            if( $qt_position ) :
                                                $output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
                                            endif;
                                            if( $qt_rating ) :
                                                $output .= '<div class="tr-testimonial-ratings"><ul>';
                                                for ($i=0; $i < $content['qt_client_contents_rating'] ; $i++) :
                                                    $output .= '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                                endfor;
                                                $output .= '</ul></div>';
                                            endif;
                                            $output .= '</div>';
                                        $output .= '</div>';
                                    if ( $qt_mgs['qt_style_list_auth_pos'] == 'tr-before-quote' ) :
                                        if( $qt_quote_icon ) :
                                            $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                        endif;
                                        if( $qt_quote ) :
                                            $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                                        endif;
                                    endif;
                                    break;

                                default:
                                    // code...
                                    break;
                            }
                            $output .= '</div>';
                        endforeach;
                    $output .= '</div>';
                $output .= '</div>';
