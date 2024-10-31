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



                $qt_style_slider_design         = $qt_mgs['qt_style_slider_design'];

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

				if ( $qt_mgs['qt_show_slider_nav'] ) {
					$qt_slider_nav_style = $qt_mgs['qt_slider_nav_style'];
					$qt_slider_nav_style = $qt_slider_nav_style . ' ' . $qt_mgs['qt_slider_nav_position'];
					$qt_slider_nav_style = $qt_slider_nav_style;
				} else {
					$qt_slider_nav_style = '';
				}
				if ( $qt_mgs['qt_show_slider_dot'] ) {
					$qt_slider_dot_style = $qt_mgs['qt_slider_dot_style'];
					$qt_slider_dot_style = $qt_slider_dot_style . ' ' . $qt_mgs['qt_slider_dot_position'];
					$qt_slider_dot_style = $qt_slider_dot_style;
				} else {
					$qt_slider_dot_style = '';
				}

                $output .= '<div class="tr-testimonial-content tr-slider-'.$qt_style_slider_design. ' '.$qt_style_content_alignment.'">';
                    $output .= '<div class="testimonial-content-info">';

                switch ( $qt_style_slider_design ) {
					case 'style-1':
						$output .= '<div class="tr-slider-1">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							$output .= '<div class="tr-testimonial">';
								$output .= '<div class="tr-testimonial-content">';
									$output .= '<div class="testimonial-content-info">';
										$output .= '<div class="tr-row">';
											$output .= '<div class="tr-column-md-6">';
												$output .= '<div class="tr-testimonial-img">';
													$output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
												$output .= '</div>';
											$output .= '</div>';
											$output .= '<div class="tr-column-md-6">';
												$output .= '<div class="tr-testimonial-info">';
												if( $qt_quote_icon ) :
				                                    $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
				                                endif;
				                                if( $qt_quote ) :
				                                    $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
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
											$output .= '</div>';
										$output .= '</div>';
									$output .= '</div>';
								$output .= '</div>';
							$output .= '</div>';
						endforeach;
						$output .= '</div>';
						$output .= '<div class="tr-slider-nav">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							$output .= '<div class="tr-testimonial-author">';
								$output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
									$output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
								$output .= '</div>';
								$output .= '<div class="tr-author-info">';
								if( $qt_title ) :
									$output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
								endif;
								if( $qt_position ) :
									$output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
								endif;
								$output .= '</div>';
							$output .= '</div>';
						endforeach;
						$output .= '</div>';
						break;

					case 'style-2':

						$output .= '<div class="tr-slider-nav-2">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							$output .= '<div class="tr-testimonial-author">';
								$output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
									$output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
								$output .= '</div>';
								$output .= '<div class="tr-author-info">';
								if( $qt_title ) :
									$output .= '<span class="tr-title">'. $content['qt_client_contents_name'] .'</span>';
								endif;
								if( $qt_position ) :
									$output .= '<span>'. $content['qt_client_contents_position'] .'</span>';
								endif;
								$output .= '</div>';
							$output .= '</div>';
						endforeach;
						$output .= '</div>';

						$output .= '<div class="tr-slider-2">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							$output .= '<div class="tr-testimonial">';
								$output .= '<div class="tr-testimonial-info">';
								if( $qt_quote_icon ) :
                                    $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                endif;
                                if( $qt_quote ) :
                                    $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
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
						endforeach;
						$output .= '</div>';
						break;

                    case 'style-3':

						//Slider nav html
						$output .= '<div class="tr-slider-nav-3">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							$output .= '<div class="tr-testimonial-author">';
								$output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
									$output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
								$output .= '</div>';
							$output .= '</div>';
						endforeach;
						$output .= '</div>';
						//End slider nav html
                        //Slider content html
                        $output .= '<div class="tr-slider-3">';
                        foreach ($qt_mcf['qt_client_contents'] as $content) :
                            $output .= '<div class="tr-testimonial">';
                                $output .= '<div class="tr-testimonial-info">';
                                if( $qt_quote_icon ) :
                                    $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                endif;
                                if( $qt_quote ) :
                                    $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
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
                            $output .= '</div>';
                        endforeach;
                        $output .= '</div>';
                        //End slider content html
                        break;

                    case 'style-4':
                        if( $qt_quote ) :
                            $output .= '<div class="tr-slider-4 '.$qt_slider_nav_style.' '.$qt_slider_dot_style.'">';
                            foreach ($qt_mcf['qt_client_contents'] as $content) :
                                $output .= '<div class="tr-testimonial">';
                                    $output .= '<div class="tr-testimonial-info">';
                                    if( $qt_quote_icon ) :
                                        $output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                    endif;
                                        $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                                    $output .= '</div>';
                                $output .= '</div>';
                            endforeach;
                            $output .= '</div>';
                        endif;
                            $output .= '<div class="tr-slider-nav-4">';
                            foreach ($qt_mcf['qt_client_contents'] as $content) :
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
                            endforeach;
                            $output .= '</div>';
                        break;

					case 'style-5':

					$output .= '<div class="tr-slider-5 '.$qt_slider_nav_style.' '.$qt_slider_dot_style.'">';
					foreach ($qt_mcf['qt_client_contents'] as $content) :
						$output .= '<div class="tr-testimonial">';
						if( $qt_quote ) :
							$output .= '<div class="tr-testimonial-info">';
							if( $qt_quote_icon ) :
								$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
							endif;
								$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
							$output .= '</div>';
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
						$output .= '</div>';
					endforeach;
					$output .= '</div>';

						break;

					case 'style-6':

					$output .= '<div class="tr-slider-6 '.$qt_slider_nav_style.' '.$qt_slider_dot_style.'">';
					foreach ($qt_mcf['qt_client_contents'] as $content) :
						$output .= '<div class="tr-testimonial tr-style-9">';
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
							if( $qt_quote_icon ) :
								$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
							endif;
							if( $qt_quote ) :
								$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
							endif;
						$output .= '</div>';
					endforeach;
					$output .= '</div>';

						break;
					
					case 'style-7':
                        $output .= '<div class="tr-slider-7 '.$qt_slider_nav_style.' '.$qt_slider_dot_style.'">';
                        $counter = 1;
                        foreach ($qt_mcf['qt_client_contents'] as $content) :
                            $contentPosition = ( $counter%2 != 0 ) ? 'tr-text-right' : 'tr-text-left';
                            $output .= '<div class="tr-testimonial '.$contentPosition.'">';
                            if( $qt_quote_icon ) :
                                $output .= '<div class="tr-testimonial-icon tr-icon-style-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                            endif;
                            if( $qt_quote ) :
                                $output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
                            endif;
                                $output .= '<div class="tr-testimonial-author">';
                                if( $qt_image ) :
                                    $output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
                                        $output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
                                    $output .= '</div>';
                                endif;
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
                                $output .= '</div>';
                            $output .= '</div>';
                            $counter++;
                        endforeach;
                        $output .= '</div>';
                        break;

					case 'grid-2' :
					case 'grid-3' :

						$output .= '<div class="tr-grid-slider '.$qt_slider_nav_style.' '.$qt_slider_dot_style.'">';
						foreach ($qt_mcf['qt_client_contents'] as $content) :
							if ( $qt_mgs['qt_style_slider_grid_design'] == 'tr-grid-style-0' || $qt_mgs['qt_style_slider_grid_design'] == 'tr-grid-style-1' ) :
								$output .= '<div class="tr-testimonial '. $qt_mgs['qt_style_slider_grid_design'] .'">';
								if( $qt_quote_icon ) :
									$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
								endif;
								if( $qt_quote ) :
									$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
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
								$output .= '</div>';
							elseif( $qt_mgs['qt_style_slider_grid_design'] == 'tr-grid-style-2' ):
								$output .= '<div class="tr-testimonial tr-grid-style-2">';
								if ( $qt_mgs['qt_style_slider_grid_2_auth_pos'] == 'tr-after-quote' ) :
									if( $qt_quote_icon ) :
										$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
									endif;
									if( $qt_quote ) :
										$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
									endif;
								endif;
									$output .= '<div class="tr-testimonial-author">';
									if( $qt_image ) :
										$output .= '<div class="tr-author-image '.$qt_style_image_shape.' '.$qt_mgs['qt_style_slider_grid_2_img_pos'].'">';
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
								if ( $qt_mgs['qt_style_slider_grid_2_auth_pos'] == 'tr-before-quote' ) :
									if( $qt_quote_icon ) :
										$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
									endif;
									if( $qt_quote ) :
										$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
									endif;
								endif;
								$output .= '</div>';
							elseif( $qt_mgs['qt_style_slider_grid_design'] == 'tr-style-9' ):
								$designSwap = ( $qt_mgs['qt_style_slider_grid_2_auth_pos'] == 'tr-after-quote' ) ? 'tr-style-13' : 'tr-style-9';
								$output .= '<div class="tr-testimonial '.$designSwap.'">';
								if ( $qt_mgs['qt_style_slider_grid_2_auth_pos'] == 'tr-after-quote' ) :
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
								if ( $qt_mgs['qt_style_slider_grid_2_auth_pos'] == 'tr-before-quote' ) :
									if( $qt_quote_icon ) :
										$output .= '<div class="tr-testimonial-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
									endif;
									if( $qt_quote ) :
										$output .= '<div class="tr-testimonial-description"><p>'. $content['qt_client_contents_quote'] .'</p></div>';
									endif;
								endif;
								$output .= '</div>';
							elseif( $qt_mgs['qt_style_slider_grid_design'] == 'tr-style-11' ):
								$output .= '<div class="tr-testimonial tr-slider-style-11">';
								if( $qt_image && $qt_mgs['qt_style_slider_grid_2_auth_posv2'] != 'tr-after-image' ) :
									$output .= '<div class="tr-author-image '.$qt_style_image_shape.'">';
										$output .= '<img src="'. $content['qt_client_contents_image'] .'" alt="'. $content['qt_client_contents_name'] .'">';
									$output .= '</div>';
								endif;
								if ( $qt_mgs['qt_style_slider_grid_2_auth_posv2'] == 'tr-after-image' ) :
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
									if ( $qt_mgs['qt_style_slider_grid_2_auth_posv2'] == 'tr-before-quote' ) :
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
									if ( $qt_mgs['qt_style_slider_grid_2_auth_posv2'] == 'tr-after-quote' ) :
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
								$output .= '</div>';
							endif;
						endforeach;
						$output .= '</div>';
						break;

                    default:

                        break;
                }
                    $output .= '</div>';
                $output .= '</div>';

?>
