<?php

	// Button top and bottom setting and control.
	$wp_customize->add_setting(
		'button_top_bottom',
			array(
				'default'			=>  0.85,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'button_top_bottom',
			array(
				'label'   		=> __( 'Button Top & Bottom Size (em)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0.42,
									'max' => 2,
									'step' => 0.42,
								)
						)
				)
		);
	
	// Button left and right setting and control.
	$wp_customize->add_setting(
		'button_left_right',
			array(
				'default'			=>  1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control(
			$wp_customize,  
			'button_left_right',
			array(
				'label'   		=> __( 'Button Left & Right Size (em)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0.50,
									'max' => 3,
									'step' => .50,
								)
						)
				)
		);

	// Input button border size setting and control.
	$wp_customize->add_setting(
		'button_border_size',
			array(
				'default'			=>  1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'button_border_size',
			array(
				'label'   		=> __( 'Button Border Size (px)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0,
									'max' => 20,
									'step' => 1,
								)
						)
				)
		);

	// Font size setting and control.
	$wp_customize->add_setting(
		'button_font_size',
			array(
				'default'			=>  1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'button_font_size',
			array(
				'label'   		=> __( 'Button Font Size (em)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> .50,
									'max'	=> 3,
									'step'	=> .10,
								),
						)
				)
		);

    // General button background color setting and control
    $wp_customize->add_setting(
        'gnrl_button_background',
            array(
                'default'			=> '#0d2a50',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'gnrl_button_background',
            array(
                'label'         => __( 'Button Background', 'tdev' ),
                'description'	=> __( 'General background button background color', 'tdev' ),
                'section'		=> 'tdev_input_fields',
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

    // General button text color setting and control.
    $wp_customize->add_setting(
        'gnrl_button_text_color',
            array(
                'default'           => '#ffffff',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gnrl_button_text_color',
            array(
                'label'       => __( 'Button Text Color', 'tdev' ),
                'description' => __( 'General button text color', 'tdev' ),
                'section'     => 'tdev_input_fields',
            )
        )
	);
	
	// General button selected background color setting and control
    $wp_customize->add_setting(
        'gnrl_button_select_background',
            array(
                'default'			=> '#ffffff',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'gnrl_button_select_background',
            array(
                'label'         => __( 'Button Selected Background', 'tdev' ),
                'section'		=> 'tdev_input_fields',
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

    // General button selected text color setting and control.
    $wp_customize->add_setting(
        'gnrl_button_select_text_color',
            array(
                'default'           => '#0d2a50',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'gnrl_button_select_text_color',
            array(
                'label'       => __( 'Button Selected Text Color', 'tdev' ),
                'section'     => 'tdev_input_fields',
            )
        )
    );
	
	// Input fields border radius size setting and control.
	$wp_customize->add_setting(
		'elmnts_border_radius',
			array(
				'default'			=>  3,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control(
			$wp_customize,
			'elmnts_border_radius',
			array(
				'label'   		=> __( 'Elements Border Radius Size (px)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0,
									'max' => 50,
									'step' => 1,
								)
						)
				)
		);
			
	// Input fields border radius size setting and control.
	$wp_customize->add_setting(
		'input_border_size',
			array(
				'default'			=>  1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control(
			$wp_customize,
			'input_border_size',
			array(
				'label'   		=> __( 'Input Fields Border Size (px)', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0,
									'max' => 20,
									'step' => 1,
								)
						)
				)
		);

	// Input fields border color setting and control
	$wp_customize->add_setting(
		'input_border_color',
			array(
				'default'			=> '#bdaaaa',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'input_border_color',
			array(
				'label'         => __( 'Input Fields Border Color', 'tdev' ),
				'section'		=> 'tdev_input_fields',
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

	// Input fields background color setting and control
	$wp_customize->add_setting(
		'input_background_color',
			array(
				'default'			=> '#ececec',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'input_background_color',
			array(
				'label'         => __( 'Input Fields Background Color', 'tdev' ),
				'section'		=> 'tdev_input_fields',
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

	// Input fields placeholder font color setting and control.
	$wp_customize->add_setting(
		'input_fields_placeholder_font_color',
			array(
				'default'           => '#696969',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'input_fields_placeholder_font_color',
			array(
				'label'       => __( 'Input Fields Placeholder Font Color', 'tdev' ),
				'section'     => 'tdev_input_fields',
			)
		)
	);

    // Input fields font color setting and control.
    $wp_customize->add_setting(
        'input_font_color',
            array(
                'default'           => '#0a0a0a',
                'type'				=> 'theme_mod',
                'capability'		=> 'edit_theme_options',
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'input_font_color',
            array(
                'label'       => __( 'Input Fields Font Color', 'tdev' ),
                'section'     => 'tdev_input_fields',
            )
        )
	);

	// Input fields font size setting and control.
	$wp_customize->add_setting(
		'input_area_font_size',
			array(
				'default'			=>  1,
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'input_area_font_size',
			array(
				'label'   		=> __( 'Input Fields Font Size', 'tdev' ),
				'section' 		=> 'tdev_input_fields',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 2,
									'step'	=> .25,
								)	
						)
				)
		);
