<?php

    
	// Section for body customization
	$wp_customize->add_section(
        'tdev_body_layout' ,
        array(
			'title'			=> __( 'Body Layout' ),
			'priority'		=> 80,
        )
    );

    
	// Add body background color setting and control.
	$wp_customize->add_setting(
		'body_background_color',
			array(
				'default'			=> '#ffffff',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options'
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'body_background_color',
			array(
				'label'         => __( 'Body Background Color', 'tdev' ),
				'description'	=> __( 'Apply body background color', 'tdev' ),
				'section'		=> 'tdev_body_layout',
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

	// Blog page sidebar position setting and control.
	$wp_customize->add_setting(
		'sidebar_position',
			array(
				'default'			=> 'right_side',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options'
			)
		);

	$wp_customize->add_control(
		'sidebar_position',
		array(
			'label'       => __( 'Position Of Sidebar', 'tdev' ),
			'section'     => 'tdev_body_layout',
			'type'		  => 'select',
			'choices'	  => array(
							'left_side'		=>	'Left Side',
							'right_side'	=>	'Right Side'
								)
						)
				);

	
