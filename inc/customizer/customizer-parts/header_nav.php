<?php

	// Panel for header and navigation
	$wp_customize->add_panel(
		'header_navigation', 
		array(
			'title'			=> __( 'Header and Navigation', 'tdev' ),
			'description'	=> __('Control the header and navigation settings of the theme', 'tdev' ), // Include html tags such as <p>.
			'priority'		=> 40, // Mixed with top-level-section hierarchy.
			) 
        );

	// Section for logo and header customization
	$wp_customize->add_section(
        'tdev_header_logo_header' ,
        array(
            'title'			=> __( 'Header Color' ),
            'description'	=> __( 'Options to customize logo and header section' ),
            'panel'			=> 'header_navigation',
        )
        );

    // Section for header CTA button
    $wp_customize->add_section(
            'tdev_menu' ,
            array(
                'title'			=> __( 'Header Menu Settings' ),
                'description'	=> __( 'You can choose how to display the menu of the site. Options will customize the header menu' ),
                'panel'			=> 'header_navigation',
            )
        );
        
    // Section for header CTA button
    $wp_customize->add_section(
            'tdev_header_cta' ,
            array(
                'title'			=> __( 'Header CTA Button' ),
                'description'	=> __( 'Options to customize header CTA button' ),
                'panel'			=> 'header_navigation',
            )
        );


	// Using custom setting
	// Add beginning header background color setting and control.
	$wp_customize->add_setting(
        'header_beginning_background_color',
        array(
            'default'			=> 'rgba(209,0,55,0.7)',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'header_beginning_background_color',
            array(
                'label'         => __( 'Beginning Header Background Color', 'tdev' ),
                'description'	=> __( 'Apply a background color for beginning header', 'tdev' ),
                'section'		=> 'tdev_header_logo_header',
                'settings'      => 'header_beginning_background_color',
                'show_opacity'  => true, // Optional.
                'palette'	=> array(
                    '#000000',
                    '#ffffff',
                    '#e53935',
                    '#ffa726',
                    '#fdd835',
                    '#8bc34a',
                    'rgb(1, 87, 155)', // RGB, RGBa, and hex values supported
                    'rgb(150, 50, 220, 0.99)', // Different spacing = no problem
                )
            )
        )
    );

	// Add sticky header background color setting and control
	$wp_customize->add_setting(
        'sticky_header_background_color',
        array(
            'default'			=> 'rgba(209,0,55,0.7)',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'sticky_header_background_color',
            array(
                'label'         => __( 'Sticky Header Background Color', 'tdev' ),
                'description'	=> __( 'Apply a background color for sticky header', 'tdev' ),
                'section'		=> 'tdev_header_logo_header',
                'settings'      => 'sticky_header_background_color',
                'show_opacity'  => true, // Optional.
                'palette'	=> array(
                    '#000000',
                    '#ffffff',
                    '#e53935',
                    '#ffa726',
                    '#fdd835',
                    '#8bc34a',
                    'rgb(1, 87, 155)', // RGB, RGBa, and hex values supported
                    'rgb(150, 50, 220, 0.99)', // Different spacing = no problem
                )
            )
        )
    );

    // Header 1st level menu item text size setting and control.
    $wp_customize->add_setting(
        'header_fst_level_menu_item_text_size',
            array(
                'default'			=>  1,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh'
            )
        );

    $wp_customize->add_control(		
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'header_fst_level_menu_item_text_size',
                array(
                    'label'   		=> __( '1st Level Menu Text Size', 'tdev' ),
                    'description'	=> __( 'Apply 1st level header menu text size', 'tdev' ),
                    'section' 		=> 'tdev_menu',
                    'type'    		=> 'range',
                    'input_attrs'	=> array(
                                        'min' => .5,
                                        'max' => 4,
                                        'step' => .1,
                                    )	
                            )
                    )
            );

    // Header 2nd level menu item text size setting and control.
    $wp_customize->add_setting(
        'header_scnd_level_menu_item_text_size',
            array(
                'default'			=>  1,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'header_scnd_level_menu_item_text_size',
                array(
                    'label'   		=> __( '2nd Level Menu Text Size', 'tdev' ),
                    'description' => __( 'Apply 2nd level header menu text size', 'tdev' ),
                    'section' 		=> 'tdev_menu',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min' => .5,
                                        'max' => 3,
                                        'step' => .1,
                                    )	
                            )
                    )
            );

    // Header menu padding top and bottom setting and control.
    $wp_customize->add_setting(
        'header_menu_item_top_bottom_size',
            array(
                'default'			=>  25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'header_menu_item_top_bottom_size',
            array(
                'label'   		=> __( 'Menu Item Top & Bottom Size', 'tdev' ),
                'description'	=> __( 'Apply header menu top and bottom size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 10,
                                    'max' => 30,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Header menu padding left and right setting and control.
    $wp_customize->add_setting(
        'header_menu_item_left_right_size',
            array(
                'default'			=>	25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'header_menu_item_left_right_size',
            array(
                'label'   		=> __( 'Menu Item Left & Right Size', 'tdev' ),
                'description'	=> __( 'Apply header menu left and right size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 10,
                                    'max' => 30,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Add first level menu color setting and control.
    $wp_customize->add_setting(
        'header_fst_level_menu_color',
        array(
            'default'			=> '#6f6f6f',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_fst_level_menu_color',
            array(
                'label'         => __( '1st Level Menu Text Color', 'tdev' ),
                'description'	=> __( 'Apply a 1st level menu text color', 'tdev' ),
                'section'		=> 'tdev_menu'
            )
        )
    );

    // Add first level menu hover text color setting and control.
    $wp_customize->add_setting(
        'header_fst_level_menu_select_text_color',
            array(
                'default'			=> '#267AEA',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_fst_level_menu_select_text_color',
            array(
                'label'         => __( '1st Level Select Text Color', 'tdev' ),
                'description'	=> __( 'Apply a 1st level menu select text color', 'tdev' ),
                'section'		=> 'tdev_menu'
            )
        )
    );

    // Header menu padding left and right setting and control.
    $wp_customize->add_setting(
        'header_fst_level_menu_select_border_size',
            array(
                'default'			=>	4,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'header_fst_level_menu_select_border_size',
            array(
                'label'   		=> __( 'Selected Menu Border Size', 'tdev' ),
                'description'	=> __( 'Apply selected menu border size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 1,
                                    'max' => 10,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Add first level menu hover border color setting and control.
    $wp_customize->add_setting(
        'header_fst_level_menu_select_border_color',
            array(
                'default'			=> '#000000',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_fst_level_menu_select_border_color',
            array(
                'label'         => __( 'Selected Menu Border Color', 'tdev' ),
                'description'	=> __( 'Apply a 1st level menu selected border color', 'tdev' ),
                'section'		=> 'tdev_menu'
            )
        )
    );

    // Header second level menu padding top and bottom setting and control.
    $wp_customize->add_setting(
        'header_scnd_lvl_menu_item_top_bottom_size',
            array(
                'default'			=>  25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'header_scnd_lvl_menu_item_top_bottom_size',
            array(
                'label'   		=> __( 'Menu Second Level Top & Bottom Size', 'tdev' ),
                'description'	=> __( 'Apply header secend level menu top and bottom size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 10,
                                    'max' => 30,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Header menu padding left and right setting and control.
    $wp_customize->add_setting(
        'header_scnd_lvl_menu_item_left_right_size',
            array(
                'default'			=>	25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'header_scnd_lvl_menu_item_left_right_size',
            array(
                'label'   		=> __( 'Menu Second Level Left & Right Size', 'tdev' ),
                'description'	=> __( 'Apply header second level menu left and right size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 10,
                                    'max' => 30,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Add second level menu background color setting and control.
    $wp_customize->add_setting(
        'header_scnd_level_menu_background_color',
            array(
                'default'			=> 'rgba(209,0,55,0.7)',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'header_scnd_level_menu_background_color',
            array(
                'label'         => __( '2nd Level Menu Background Color', 'tdev' ),
                'description'	=> __( 'Apply a 2nd level menu background color', 'tdev' ),
                'section'		=> 'tdev_menu',
                'show_opacity'  => true, // Optional.
                'palette'	=> array(
                    '#000000',
                    '#ffffff',
                    '#e53935',
                    '#ffa726',
                    '#fdd835',
                    '#8bc34a',
                    'rgb(1, 87, 155)', // RGB, RGBa, and hex values supported
                    'rgb(150, 50, 220, 0.99)', // Different spacing = no problem
                )
            )
        )
    );

    // Add second level menu hover background color setting and control.
    $wp_customize->add_setting(
        'header_scnd_level_menu_text_color',
            array(
                'default'			=> '#ffffff',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options'
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_scnd_level_menu_text_color',
            array(
                'label'         => __( '2nd Level Menu Text Color', 'tdev' ),
                'description'	=> __( 'Apply a 2nd level menu text color', 'tdev' ),
                'section'		=> 'tdev_menu',
            )
        )
    );

    // Add mobile menu button margin top gap setting and control
    $wp_customize->add_setting(
        'mobile_menu_button_margin_top_gap',
            array(
                'default'			=>	7,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
            )
        );
    
    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'mobile_menu_button_margin_top_gap',
            array(
                'label'   		=> __( 'Mobile Menu Button Top gap', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 0,
                                    'max' => 80,
                                    'step' => 1,
                                )	
                        )
                )
        );

  // Add mobile menu button margin top gap setting and control
    $wp_customize->add_setting(
        'mobile_menu_button_margin_bottom_gap',
            array(
                'default'			=>	7,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
            )
        );
    
    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'mobile_menu_button_margin_bottom_gap',
            array(
                'label'   		=> __( 'Mobile Menu Button Bottom gap', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 0,
                                    'max' => 80,
                                    'step' => 1,
                                )	
                        )
                )
        );

    // Add mobile menu button content size setting and control
    $wp_customize->add_setting(
    'mobile_menu_button_content_size',
        array(
            'default'			=>	.90,
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'mobile_menu_button_content_size',
            array(
                'label'   		=> __( 'Mobile Menu Button Content Size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => .60,
                                    'max' => 3,
                                    'step' => .30,
                                )	
                        )
                )
        );

    // Add mobile menu button content size setting and control
    $wp_customize->add_setting(
        'mobile_menu_button_left_right_size',
            array(
                'default'			=>	.25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
            )
        );
    
        $wp_customize->add_control(
            new Customizer_Range_Value_Control(
                $wp_customize,
                'mobile_menu_button_left_right_size',
                array(
                    'label'   		=> __( 'Mobile Menu Button Left & Right Size', 'tdev' ),
                    'section' 		=> 'tdev_menu',
                    'type'    		=> 'range',
                    'input_attrs'	=> array(
                                        'min' => .25,
                                        'max' => 5,
                                        'step' => .25,
                                    )	
                            )
                    )
            );

    // Add mobile menu button top and bottom size setting and control
    $wp_customize->add_setting(
        'mobile_menu_button_top_bottom_size',
            array(
                'default'			=>	.25,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
            )
        );
    
    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'mobile_menu_button_top_bottom_size',
            array(
                'label'   		=> __( 'Mobile Menu Button Top & Bottom Size', 'tdev' ),
                'section' 		=> 'tdev_menu',
                'type'    		=> 'range',
                'input_attrs'	=> array(
                                    'min' => 0,
                                    'max' => 5,
                                    'step' => .25,
                                )	
                        )
                )
        );

    // Header CTA button text setting and control
    $wp_customize->add_setting(
            'cta_button_text',
            array(
                'default'			=> 'CONTACT US',
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

    $wp_customize->add_control(
            'cta_button_text',
            array(
                'label'   		=> __( 'Button Text', 'tdev' ),
                'section' 		=> 'tdev_header_cta',
                'type'    		=> 'text',
            )
        );

    // Header CTA button url setting and control
    $wp_customize->add_setting(
            'cta_button_url',
            array(
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

    $wp_customize->add_control(
            'cta_button_url',
            array(
                'label'   		=> __( 'Button Url', 'tdev' ),
                'section' 		=> 'tdev_header_cta',
                'type'    		=> 'url',
            )
        );


    // Header CTA button text size setting and control
    $wp_customize->add_setting(
            'cta_button_text_size',
            array(
                'default'			=> 16,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'cta_button_text_size',
            array(
                'label'   		=> __( 'Button Text Size', 'tdev' ),
                'section' 		=> 'tdev_header_cta',
                'type'    		=> 'range',
                'input_attrs' => array(
                                'min'	=> 10,
                                'max'	=> 24,
                                'step'	=> 1,
                                )
                        )
                )
        );

    // CTA button margin-top setting and control.
    $wp_customize->add_setting(
        'cta_button_margin_top',
            array(
                'default'			=>  11,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'cta_button_margin_top',
                array(
                    'label'   		=> __( 'Button Gap From Top', 'tdev' ),
                    'section' 		=> 'tdev_header_cta',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min'	=> 0,
                                        'max'	=> 20,
                                        'step'	=> 1,
                                    )
                            )
                    )
            );

    // CTA button padding top and bottom setting and control.
    $wp_customize->add_setting(
        'cta_button_top_bottom_size',
            array(
                'default'			=>  10,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'cta_button_top_bottom_size',
                array(
                    'label'   		=> __( 'CTA button top and bottom size', 'tdev' ),
                    'section' 		=> 'tdev_header_cta',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min' => 0,
                                        'max' => 20,
                                        'step' => 1,
                                    )			
                            )
                    )
            );

    // CTA button padding left and right setting and control.
    $wp_customize->add_setting(
        'cta_button_left_right_size',
            array(
                'default'			=>  30,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'cta_button_left_right_size',
                array(
                    'label'   		=> __( 'CTA button left and right size', 'tdev' ),
                    'section'		=> 'tdev_header_cta',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min' => 5,
                                        'max' => 30,
                                        'step' => 1,
                                    )			
                            )
                    )
            );

    // Add CTA button background color setting and control
    $wp_customize->add_setting(
        'cta_button_background',
            array(
                'default'			=> '#f7682f',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'cta_button_background',
            array(
                'label'         => __( 'Button Background Color', 'tdev' ),
                'description'	=> __( 'Apply a background color for CTA button', 'tdev' ),
                'section'		=> 'tdev_header_cta',
                'show_opacity'  => true, // Optional.
                'palette'	=> array(
                    '#000000',
                    '#ffffff',
                    '#e53935',
                    '#ffa726',
                    '#fdd835',
                    '#8bc34a',
                    'rgb(1, 87, 155)', // RGB, RGBa, and hex values supported
                    'rgb(150, 50, 220, 0.99)', // Different spacing = no problem
                )
            )
        )
    );

    // CTA button text color setting and control.
    $wp_customize->add_setting(
        'cta_button_text_color',
            array(
                'default'           => '#ffffff',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options'
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'cta_button_text_color',
            array(
                'label'       => __( 'Button Text Color', 'tdev' ),
                'description' => __( 'Apply color to text of the CTA button.', 'tdev' ),
                'section'     => 'tdev_header_cta',
            )
        )
    );

    // CTA button border select size setting and control.
    $wp_customize->add_setting(
        'cta_button_border_size',
            array(
                'default'			=>  1,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize,
            'cta_button_border_size',
                array(
                    'label'   		=> __( 'Button Border Size', 'tdev' ),
                    'section'		=> 'tdev_header_cta',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min' => 1,
                                        'max' => 8,
                                        'step' => 1,
                                )			
                        )
                )
        );

    // CTA button border radius size setting and control.
    $wp_customize->add_setting(
        'cta_button_border_radius_size',
            array(
                'default'			=>  3,
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );

    $wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
            'cta_button_border_radius_size',
                array(
                    'label'   		=> __( 'Button Border Radius Size', 'tdev' ),
                    'section'		=> 'tdev_header_cta',
                    'type'    		=> 'range',
                    'input_attrs' => array(
                                        'min' => 0,
                                        'max' => 50,
                                        'step' => 1,
                                )			
                        )
                )
        );

    // Add CTA button background select color setting and control
    $wp_customize->add_setting(
        'cta_button_select_background',
            array(
                'default'			=> '#ffffff',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'cta_button_select_background',
            array(
                'label'         => __( 'Button Select Background Color', 'tdev' ),
                'description'	=> __( 'Apply a select background color for CTA button', 'tdev' ),
                'section'		=> 'tdev_header_cta',
                'show_opacity'  => true, // Optional.
                'palette'	=> array(
                    '#000000',
                    '#ffffff',
                    '#e53935',
                    '#ffa726',
                    '#fdd835',
                    '#8bc34a',
                    'rgb(1, 87, 155)', // RGB, RGBa, and hex values supported
                    'rgb(150, 50, 220, 0.99)', // Different spacing = no problem
                )
            )
        )
    );

    // CTA button text select color setting and control.
    $wp_customize->add_setting(
        'cta_button_select_text_color',
            array(
                'default'           => '#f7682f',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'cta_button_select_text_color',
            array(
                'label'       => __( 'Button Select Text Color', 'tdev' ),
                'description' => __( 'Apply select text color of CTA button.', 'tdev' ),
                'section'     => 'tdev_header_cta',
            )
        )
    );


