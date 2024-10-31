<?php

if( class_exists( 'CSF' ) ) {

    $contentPrefix = '_qt_content_information';

    CSF::createMetabox( $contentPrefix, array(
        'title'     => esc_html__( 'Testimonial Content', 'quick-testimonials' ),
        'post_type' => 'tr_testimonial',
        'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
    ) );

    // Create a section
    CSF::createSection( $contentPrefix, array(
        'title'  => esc_html__( 'Testimonial Content', 'quick-testimonials' ),
        'fields' => array(
            array(
                'id'              => 'qt_client_contents',
                'type'            => 'group',
                'title'           => esc_html__( 'Reviewers Content Group', 'quick_testimonials' ),
                'button_title'    => esc_html__( 'Add New', 'quick_testimonials' ),
                'fields'          => array(
                    array(
                        'id'    => 'qt_client_contents_name',
                        'type'  => 'text',
                        'title' => esc_html__( 'Reviewer Name', 'quick_testimonials' )
                    ),
                    array(
                        'id'    => 'qt_client_contents_image',
                        'type'  => 'upload',
                        'title' => esc_html__( 'Reviewer Image', 'quick_testimonials' ),
                        'desc'  => esc_html__( 'Upload a square dimension imange to show perfectly exp 200x200 or 500x500 etc.', 'quick_testimonials' ),
                        'library'      => 'image',
                        'placeholder'  => 'http://',
                        'button_title' => 'Add Image',
                        'remove_title' => 'Remove Image',
                    ),
                    array(
                        'id'    => 'qt_client_contents_position',
                        'type'  => 'text',
                        'title' => esc_html__( 'Reviewer Designation', 'quick_testimonials' )
                    ),
                    array(
                        'id'    => 'qt_client_contents_quote',
                        'type'  => 'wp_editor',
                        'title' => esc_html__( 'Reviewer Quote', 'quick_testimonials' ),
                        'tinymce'       => true,
                        'quicktags'     => true,
                        'media_buttons' => false,
                        'height'        => '100px',
                    ),
                    array(
                        'id'    => 'qt_client_contents_rating',
                        'type'  => 'select',
                        'title' => esc_html__( 'Reviewer Rating', 'quick_testimonials' ),
                        'options'    => array(
                            '1'     => esc_html__( '1 Star', 'quick-testimonials'),
                            '2'     => esc_html__( '2 Star', 'quick-testimonials'),
                            '3'     => esc_html__( '3 Star', 'quick-testimonials'),
                            '4'     => esc_html__( '4 Star', 'quick-testimonials'),
                            '5'     => esc_html__( '5 Star', 'quick-testimonials'),
                        ),
                    ),
                ),
            ),
        )
    ) );

    $settingsPrefix = '_qt_settings_meta_information';

    CSF::createMetabox( $settingsPrefix, array(
        'title'     => esc_html__( 'Testimonial Settings', 'quick-testimonials' ),
        'post_type' => 'tr_testimonial',
        'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
    ) );

    CSF::createSection( $settingsPrefix, array(
        'title'  => esc_html__('General Settings', 'quick-testimonials'),
        'icon'   => 'fa fa-wrench',
        'fields' => array(
            array(
                'id'    => 'qt_style',
                'type'  => 'select',
                'title' => esc_html__('Testimonial Style', 'quick-testimonials'),
                'class' => 'qt-style',
                'options'    => array(
                    'grid'     => esc_html__( 'Grid', 'quick-testimonials'),
                    'slider'   => esc_html__( 'Slider', 'quick-testimonials'),
                    'list'     => esc_html__( 'List', 'quick-testimonials'),
                ),
                'default'    => 'grid',
            ),
            array(
                'id'    => 'qt_style_grid_col',
                'type'  => 'select',
                'title' => esc_html__('Grid Column', 'quick-testimonials'),
                'options'    => array(
                    'tr-grid-2'    => esc_html__( '2 Column', 'quick-testimonials'),
                    'tr-grid-3'    => esc_html__( '3 Column', 'quick-testimonials'),
                ),
                'default'    => 'tr-grid-2',
                'dependency' => array( 'qt_style', '==', 'grid' )
            ),
            array(
                'id'        => 'qt_style_grid_design',
                'type'      => 'select',
                'title'     => 'Grid Style',
                'class'     => 'qt_style_grid_design',
                'options'   => array(
                    'default' => esc_html__( 'Default Style', 'quick-testimonials'),
                    'style-1' => esc_html__( 'Style 1', 'quick-testimonials'),
                    'style-2' => esc_html__( 'Style 2', 'quick-testimonials'),
                    'style-3' => esc_html__( 'Style 3', 'quick-testimonials'),
                    'style-4' => esc_html__( 'Style 4', 'quick-testimonials'),
                ),
                'default'    => 'default',
                'dependency' => array( 'qt_style', '==', 'grid' )
            ),
            array(
                'id'        => 'qt_style_slider_design',
                'type'      => 'select',
                'title'     => 'Slider Style',
                'options'   => array(
                    'style-1' => esc_html__( 'Style 1', 'quick-testimonials'),
                    'style-2' => esc_html__( 'Style 2', 'quick-testimonials'),
                    'style-3' => esc_html__( 'Style 3', 'quick-testimonials'),
                    'style-4' => esc_html__( 'Style 4', 'quick-testimonials'),
                    'style-5' => esc_html__( 'Style 5', 'quick-testimonials'),
                    'style-6' => esc_html__( 'Style 6', 'quick-testimonials'),
                    'style-7' => esc_html__( 'Style 7', 'quick-testimonials'),
                    'grid-2'  => esc_html__( '2 Column Grid Slider', 'quick-testimonials'),
                    'grid-3'  => esc_html__( '3 Column Grid Slider', 'quick-testimonials'),
                ),
                'default'    => 'style-1',
                'class'      => 'qt-style-slider-design',
                'dependency' => array( 'qt_style', '==', 'slider' )
            ),
            array(
                'id'        => 'qt_style_slider_grid_design',
                'type'      => 'select',
                'title'     => 'Grid Slider Style',
                'options'   => array(
                    'tr-grid-style-0' => esc_html__( 'Style 1', 'quick-testimonials'),
                    'tr-grid-style-1' => esc_html__( 'Style 2', 'quick-testimonials'),
                    'tr-grid-style-2' => esc_html__( 'Style 3', 'quick-testimonials'),
                    'tr-style-9'      => esc_html__( 'Style 4', 'quick-testimonials'),
                    'tr-style-11'     => esc_html__( 'Style 5', 'quick-testimonials'),
                ),
                'default'    => 'tr-grid-style-0',
                'class'      => 'qt-style-slider-grid-design',
                'dependency' => array( 'qt_style|qt_style_slider_design', '==|any', 'slider|grid-2,grid-3' )
            ),
            array(
                'id'        => 'qt_style_list_design',
                'type'      => 'select',
                'title'     => 'List Style',
                'options'   => array(
                    'style-1' => esc_html__( 'Style 1', 'quick-testimonials'),
                    'style-2' => esc_html__( 'Style 2', 'quick-testimonials'),
                    'style-3' => esc_html__( 'Style 3', 'quick-testimonials'),
                ),
                'default'    => 'style-1',
                'class'      => 'qt-style-slider-list-design',
                'dependency' => array( 'qt_style', '==', 'list' )
            ),
            // List Meta Settings
            array(
                'id'        => 'qt_style_list_img_pos',
                'type'      => 'select',
                'title'     => 'Image Position',
                'options'   => array(
                    'tr-image-top-left'         => esc_html__( 'Top Left', 'quick-testimonials'),
                    'tr-image-top-center'       => esc_html__( 'Top Center', 'quick-testimonials'),
                    'tr-image-top-right'        => esc_html__( 'Top Right', 'quick-testimonials'),
                    'tr-image-bottom-left'      => esc_html__( 'Bottom Left', 'quick-testimonials'),
                    'tr-image-bottom-center'    => esc_html__( 'Bottom Center', 'quick-testimonials'),
                    'tr-image-bottom-right'     => esc_html__( 'Bottom Right', 'quick-testimonials'),
                ),
                'default'    => 'tr-image-top-left',
                'class'      => 'qt-style-slider-grid-v2-design',
                'dependency' => array( 'qt_style|qt_style_list_design', '==|==', 'list|style-1' )
            ),
            array(
                'id'        => 'qt_style_list_auth_pos',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_list_design', '==|any', 'list|style-1,style-2' )
            ),
            array(
                'id'        => 'qt_style_list_2_auth_posv2',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-after-image'       => esc_html__( 'After Image', 'quick-testimonials'),
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_list_design', '==|any', 'list|style-3' )
            ),
            // Grid Meta Settings
            array(
                'id'        => 'qt_style_grid_img_pos',
                'type'      => 'select',
                'title'     => 'Image Position',
                'options'   => array(
                    'tr-image-top-left'         => esc_html__( 'Top Left', 'quick-testimonials'),
                    'tr-image-top-center'       => esc_html__( 'Top Center', 'quick-testimonials'),
                    'tr-image-top-right'        => esc_html__( 'Top Right', 'quick-testimonials'),
                    'tr-image-bottom-left'      => esc_html__( 'Bottom Left', 'quick-testimonials'),
                    'tr-image-bottom-center'    => esc_html__( 'Bottom Center', 'quick-testimonials'),
                    'tr-image-bottom-right'     => esc_html__( 'Bottom Right', 'quick-testimonials'),
                ),
                'default'    => 'tr-image-top-left',
                'class'      => 'qt-style-slider-grid-v2-design',
                'dependency' => array( 'qt_style|qt_style_grid_design', '==|==', 'grid|style-2' )
            ),
            array(
                'id'        => 'qt_style_grid_auth_pos',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_grid_design', '==|any', 'grid|style-2,style-4' )
            ),
            array(
                'id'        => 'qt_style_grid_auth_posv2',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-after-image'       => esc_html__( 'After Image', 'quick-testimonials'),
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_grid_design', '==|==', 'grid|style-3' )
            ),
            // Slider Meta Settings
            array(
                'id'        => 'qt_style_slider_grid_2_img_pos',
                'type'      => 'select',
                'title'     => 'Image Position',
                'options'   => array(
                    'tr-image-top-left'         => esc_html__( 'Top Left', 'quick-testimonials'),
                    'tr-image-top-center'       => esc_html__( 'Top Center', 'quick-testimonials'),
                    'tr-image-top-right'        => esc_html__( 'Top Right', 'quick-testimonials'),
                    'tr-image-bottom-left'      => esc_html__( 'Bottom Left', 'quick-testimonials'),
                    'tr-image-bottom-center'    => esc_html__( 'Bottom Center', 'quick-testimonials'),
                    'tr-image-bottom-right'     => esc_html__( 'Bottom Right', 'quick-testimonials'),
                ),
                'default'    => 'tr-image-top-left',
                'class'      => 'qt-style-slider-grid-v2-design',
                'dependency' => array( 'qt_style|qt_style_slider_grid_design', '==|any', 'slider|tr-grid-style-2' )
            ),
            array(
                'id'        => 'qt_style_slider_grid_2_auth_pos',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_slider_grid_design', '==|any', 'slider|tr-grid-style-2,tr-style-9' )
            ),
            array(
                'id'        => 'qt_style_slider_grid_2_auth_posv2',
                'type'      => 'select',
                'title'     => 'Author Info Position',
                'options'   => array(
                    'tr-after-image'       => esc_html__( 'After Image', 'quick-testimonials'),
                    'tr-before-quote'      => esc_html__( 'Before Quote', 'quick-testimonials'),
                    'tr-after-quote'       => esc_html__( 'After Quote', 'quick-testimonials'),
                ),
                'default'    => 'tr-before-quote',
                'class'      => 'qt-style-slider-grid-v2-auth-design',
                'dependency' => array( 'qt_style|qt_style_slider_grid_design', '==|any', 'slider|tr-style-11' )
            ),
        ),
    ) );

    CSF::createSection( $settingsPrefix, array(
        'title'  => esc_html__('Stylization', 'quick-testimonials'),
        'icon'   => 'fa fa-paint-brush',
        'fields' => array(
            array(
                'id'         => 'qt_style_content_alignment',
                'type'       => 'radio',
                'title'      => esc_html__( 'Content Alignment', 'quick-testimonials'),
                'options'    => array(
                    'tr-text-left'      => esc_html__( 'Left', 'quick-testimonials'),
                    'tr-text-center'    => esc_html__( 'Center', 'quick-testimonials'),
                    'tr-text-right'     => esc_html__( 'Right', 'quick-testimonials'),
                ),
                'default'    => 'tr-text-left'
            ),
            array(
                'id'        => 'qt_show_image',
                'type'      => 'switcher',
                'title'     => esc_html__('Image', 'quick-testimonials'),
                'subtitle'  => esc_html__( 'Show/hide reviewer image', 'quick-testimonials'),
                'desc'      => esc_html__( 'This option will not work for slider style 1, 2 & 3', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'id'         => 'qt_style_image_shape',
                'type'       => 'radio',
                'title'      => esc_html__( 'Image Style', 'quick-testimonials'),
                'options'    => array(
                    'tr-border-square'    => esc_html__( 'Square', 'quick-testimonials'),
                    'tr-border-radius'    => esc_html__( 'Circle', 'quick-testimonials'),
                ),
                'default'    => 'tr-border-square',
                'dependency' => array( 'qt_show_image', '==', 'true' )
            ),
            array(
                'id'        => 'qt_show_name',
                'type'      => 'switcher',
                'title'     => esc_html__('Name', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide reviewer name', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'title'             => esc_html__( 'Title Color', 'quick-testimonials' ),
                'id'                => 'qt_content_title_color',
                'type'              => 'color',
                'default'           => '#323c47',
                'dependency'        => array( 'qt_show_name', '==', 'true' )
            ),
            array(
                'id'        => 'qt_show_position',
                'type'      => 'switcher',
                'title'     => esc_html__('Designation', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide reviewer designation', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'title'         => esc_html__( 'Designation Color', 'quick-testimonials' ),
                'id'            => 'qt_content_position_color',
                'type'          => 'color',
                'default'       => '#74777a',
                'dependency'    => array( 'qt_show_position', '==', 'true' )
            ),
            array(
                'id'        => 'qt_show_quote',
                'type'      => 'switcher',
                'title'     => esc_html__('Quote', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide reviewer quote', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'title'         => esc_html__( 'Quote Text Color', 'quick-testimonials' ),
                'id'            => 'qt_content_quote_text_color',
                'type'          => 'color',
                'default'       => '#323c47',
                'dependency'    => array( 'qt_show_quote', '==', 'true' )
            ),
            array(
                'id'        => 'qt_show_quote_icon',
                'type'      => 'switcher',
                'title'     => esc_html__('Quote Icon', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide quote icon', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'title'         => esc_html__( 'Quote Icon Color', 'quick-testimonials' ),
                'id'            => 'qt_content_quote_icon_color',
                'type'          => 'color',
                'default'       => '#323c47',
                'dependency'    => array( 'qt_show_quote_icon', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Icon Left Color', 'quick-testimonials' ),
                'desc'          => esc_html__( 'This option will work only for slider style 7', 'quick-testimonials' ),
                'id'            => 'qt_icon_left_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_quote_icon', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Icon Right Color', 'quick-testimonials' ),
                'desc'          => esc_html__( 'This option will work only for slider style 7', 'quick-testimonials' ),
                'id'            => 'qt_icon_right_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_quote_icon', '==', 'true' )
            ),
            array(
                'id'        => 'qt_show_rating',
                'type'      => 'switcher',
                'title'     => esc_html__('Rating', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide reviewer rating', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'title'         => esc_html__( 'Star Rating Color', 'quick-testimonials' ),
                'id'            => 'qt_content_star_rating_color',
                'type'          => 'color',
                'default'       => '#FFED85',
                'dependency'    => array( 'qt_show_rating', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Testimonial Wrapper Background Color', 'quick-testimonials' ),
                'id'            => 'qt_content_wrapper_bg_color',
                'type'          => 'color',
                'default'       => '#ffffff',
            ),
        ),
    ) );

    CSF::createSection( $settingsPrefix, array(
        'title'  => esc_html__('Slider Settings', 'quick-testimonials'),
        'icon'   => 'fa fa-sliders',
        'fields' => array(
            array(
                'type'    => 'notice',
                'style'   => 'warning',
                'content' => esc_html__( 'Warning! This section will work only if slider option is available only.', 'quick-testimonials' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Navigation Settings (will not work for slider style 1, 2 & 3)', 'quick-testimonials' ),
            ),
            array(
                'id'        => 'qt_show_slider_nav',
                'type'      => 'switcher',
                'title'     => esc_html__('Navigation', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide navigation', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'id'        => 'qt_slider_nav_style',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Choose a style', 'quick-testimonials' ),
                'desc'      => esc_html__( 'Choose a slider navigation style.', 'quick-testimonials' ),
                'class'     => 'nav-style-chooser',
                'options'   => array(
                    'tr-arrow-0'     => QT_ADMIN_IMG .'arrow-1.png',
                    'tr-arrow-1'     => QT_ADMIN_IMG .'arrow-2.png',
                    'tr-arrow-2'     => QT_ADMIN_IMG .'arrow-3.png',
                    'tr-arrow-3'     => QT_ADMIN_IMG .'arrow-4.png',
                    'tr-arrow-5'     => QT_ADMIN_IMG .'arrow-5.png',
                    'tr-arrow-6'     => QT_ADMIN_IMG .'arrow-6.png',
                    'tr-arrow-7'     => QT_ADMIN_IMG .'arrow-7.png',
                    'tr-arrow-8'     => QT_ADMIN_IMG .'arrow-8.png',
                    'tr-arrow-9'     => QT_ADMIN_IMG .'arrow-9.png',
                    'tr-arrow-12'    => QT_ADMIN_IMG .'arrow-10.png',
                    'tr-arrow-10'    => QT_ADMIN_IMG .'arrow-11.png',
                ),
                'default'       => 'tr-arrow-0',
                'attributes'   => array(
                    'data-depend-id' => 'qt_slider_nav_style',
                ),
                'dependency'    => array( 'qt_show_slider_nav', '==', 'true' )
            ),
            array(
                'id'        => 'qt_slider_nav_position',
                'type'      => 'select',
                'title'     => 'Navigation Position',
                'options'   => array(
                    'tr-arrow-default'          => esc_html__( 'Default', 'quick-testimonials'),
                    'tr-arrow-top-left'         => esc_html__( 'Top Left', 'quick-testimonials'),
                    'tr-arrow-top-center'       => esc_html__( 'Top Center', 'quick-testimonials'),
                    'tr-arrow-top-right'        => esc_html__( 'Top right', 'quick-testimonials'),
                    'tr-arrow-bottom-left'      => esc_html__( 'Bottom Left', 'quick-testimonials'),
                    'tr-arrow-bottom-center'    => esc_html__( 'Bottom Center', 'quick-testimonials'),
                    'tr-arrow-bottom-right'     => esc_html__( 'Bottom right', 'quick-testimonials'),
                ),
                'default'    => 'tr-arrow-default',
                'dependency'    => array( 'qt_show_slider_nav', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Hover Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_hover_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Background Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_bg_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav|qt_slider_nav_style', '==|any', 'true|tr-arrow-1,tr-arrow-2,tr-arrow-3,tr-arrow-5,tr-arrow-6,tr-arrow-7,tr-arrow-8,tr-arrow-9,tr-arrow-10,tr-arrow-12' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Background Hover Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_bg_hover_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav|qt_slider_nav_style', '==|any', 'true|tr-arrow-1,tr-arrow-2,tr-arrow-3,tr-arrow-5,tr-arrow-6,tr-arrow-7,tr-arrow-8,tr-arrow-9,tr-arrow-10,tr-arrow-12' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Border Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_border_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav|qt_slider_nav_style', '==|any', 'true|tr-arrow-1,tr-arrow-2,tr-arrow-3,tr-arrow-5,tr-arrow-6,tr-arrow-7,tr-arrow-8,tr-arrow-9,tr-arrow-10,tr-arrow-12' )
            ),
            array(
                'title'         => esc_html__( 'Arrow Border Hover Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_arrow_border_hover_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_nav|qt_slider_nav_style', '==|any', 'true|tr-arrow-1,tr-arrow-2,tr-arrow-3,tr-arrow-5,tr-arrow-6,tr-arrow-7,tr-arrow-8,tr-arrow-9,tr-arrow-10,tr-arrow-12' )
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Dot Settings (will not work for slider style 1, 2, 3 & 4)', 'quick-testimonials' ),
            ),
            array(
                'id'        => 'qt_show_slider_dot',
                'type'      => 'switcher',
                'title'     => esc_html__('Dots', 'quick-testimonials'),
                'desc'      => esc_html__( 'Show/hide dot', 'quick-testimonials'),
                'default'   => true
            ),
            array(
                'id'        => 'qt_slider_dot_style',
                'type'      => 'select',
                'title'     => 'Dots Position',
                'options'   => array(
                    'tr-dots-1'      => esc_html__( 'Style 1', 'quick-testimonials'),
                    'tr-dots-2'      => esc_html__( 'Style 2', 'quick-testimonials'),
                    'tr-dots-3'      => esc_html__( 'Style 3', 'quick-testimonials'),
                    'tr-dots-4'      => esc_html__( 'Style 4', 'quick-testimonials'),
                ),
                'default'    => 'tr-dots-1',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
            array(
                'id'        => 'qt_slider_dot_position',
                'type'      => 'select',
                'title'     => 'Dots Position',
                'options'   => array(
                    'tr-dots-left'        => esc_html__( 'Left', 'quick-testimonials'),
                    'tr-dots-center'      => esc_html__( 'Center', 'quick-testimonials'),
                    'tr-dots-right'       => esc_html__( 'Right', 'quick-testimonials'),
                ),
                'default'    => 'tr-dots-center',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Dots Background Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_dots_bg_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Dots Background Active Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_dots_bg_active_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Dots Border Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_dots_border_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
            array(
                'title'         => esc_html__( 'Dots Border Active Color', 'quick-testimonials' ),
                'id'            => 'qt_slider_dots_border_active_color',
                'type'          => 'color',
                'dependency'    => array( 'qt_show_slider_dot', '==', 'true' )
            ),
        ),
    ) );

    CSF::createSection( $settingsPrefix, array(
        'title'  => esc_html__('Typography Settings', 'quick-testimonials'),
        'icon'   => 'fa fa-font',
        'fields' => array(
            array(
                'id'                => 'qt_name_typo',
                'type'              => 'typography',
                'title'             => esc_html__( 'Name Field', 'quick-testimonials' ),
                'text_align'        => false,
                'subset'            => false,
                'color'             => false,
                'font_style'        => false,
            ),
            array(
                'id'                 => 'qt_position_typo',
                'type'              => 'typography',
                'title'             => esc_html__( 'Position Field', 'quick-testimonials' ),
                'text_align'        => false,
                'subset'            => false,
                'color'             => false,
                'font_style'        => false,
            ),
            array(
                'id'                => 'qt_content_typo',
                'type'              => 'typography',
                'title'             => esc_html__( 'Content Field', 'quick-testimonials' ),
                'text_align'        => false,
                'subset'            => false,
                'color'             => false,
                'font_style'        => false,
            ),
        ),
    ) );

    CSF::createSection( $settingsPrefix, array(
        'title'  => esc_html__('Custom Styling', 'quick-testimonials'),
        'icon'   => 'fa fa-cogs',
        'fields' => array(
            array(
                'id'      => 'qt_styling_global_class',
                'type'    => 'text',
                'title'   => esc_html__( 'Extra class Name', 'quick-testimonials' ),
                'desc'    => esc_html__( 'Declare an extra global class name which will show as the parent div class.', 'quick-testimonials' )
            ),
            array(
                'id'       => 'qt_style_custom_css',
                'type'     => 'code_editor',
                'title'    => esc_html__( 'Custom CSS', 'quick-testimonials' ),
                'settings' => array(
                    'theme'  => 'mbo',
                    'mode'   => 'css',
                ),
            ),
        ),
    ) );
}
