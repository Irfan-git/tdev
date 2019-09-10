<?php

	// font family inside <head> tag setting and control.
	$wp_customize->add_setting(
		'head_google_font_family_style',
			array(
				'type'       	=> 'theme_mod', 
				'transport'		=> 'refresh'
				)
		);
	
	$wp_customize->add_control(
		'head_google_font_family_style',
			array(
				'label'			=> __( 'Inside </head> Google Font family style', 'tdev' ),
				'description'	=> __( 'copy google font family style link from here: https://fonts.google.com/', 'tdev' ),
				'section'		=> 'tdev_font',
				'type'			=> 'textarea'
				)
		);

	// Header font family setting and control.
	$wp_customize->add_setting(
		'heading_font_choose',
			array(
				'default'		=> 'default',
				'type'       	=> 'theme_mod', 
				'transport'		=> 'refresh'
				)
		);
	
	$wp_customize->add_control(
		'heading_font_choose',
			array(
				'label'			=> __( 'Choose Heading Font Family' ),
				'section'		=> 'tdev_font',
				'type'			=> 'select',
				'choices'		=>	fonts()
				)
		);

	// Header font weight setting and control.
	$wp_customize->add_setting(
		'header_font_weight',
			array(
				'default'			=> '400'
			)
		);

	$wp_customize->add_control(
		'header_font_weight',
		array(
			'label'       => __( 'Header Font Weight', 'tdev' ),
			'section'     => 'tdev_font',
			'type'		  => 'radio',
			'choices'	  => array(
								'400'		=>	'Normal',
								'700'		=>	'Semi-bold',
								'bold'		=>	'Bold'
								)
						)
				);
		
	// Header font style setting and control.
	$wp_customize->add_setting(
		'header_font_style',
			array(
				'transport'         => 'postMessage',
			)
		);

	$wp_customize->add_control(
		'header_font_style',
		array(
			'label'       => __( 'Header Font Style', 'tdev' ),
			'section'     => 'tdev_font',
			'type'		  => 'hidden'
			)
		);

	// Header font italic setting and control.
	$wp_customize->add_setting(
		'header_font_italic',
			array(
				'type'       		=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		'header_font_italic',
		array(
			'label'       => __( 'Header Font Italic', 'tdev' ),
			'section'     => 'tdev_font',
			'type'		  => 'checkbox'
			)
		);

	// Header font underline setting and control.
	$wp_customize->add_setting(
		'header_font_underline',
			array(
				'type'       		=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		'header_font_underline',
		array(
			'label'       => __( 'Header Font Underline', 'tdev' ),
			'section'     => 'tdev_font',
			'type'		  => 'checkbox'
			)
		);

	// Header font line height setting and control.
	$wp_customize->add_setting(
		'header_font_line_height',
			array(
				'default'			=>  1.1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'header_font_line_height',
			array(
				'label'   		=> __( 'Header Font Line Height', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 3,
									'step'	=> .1,
								)
						)
				)
		);

	// General font family setting and control.
	$wp_customize->add_setting(
		'general_font_choose',
			array(
				'default'		=> 'default',
				'type'       	=> 'theme_mod', 
				'transport'		=> 'refresh'
				)
		);
	
	$wp_customize->add_control(
			'general_font_choose',
				array(
					'label'			=> __( 'Choose General Font Family' ),
					'section'		=> 'tdev_font',
					'type'			=> 'select',
					'choices'		=>	fonts()
						)
			);

	// General font weight setting and control.
	$wp_customize->add_setting(
		'general_font_weight',
			array(
				'default'			=> '400'
			)
		);

	$wp_customize->add_control(
		'general_font_weight',
		array(
			'label'       => __( 'General Font Weight', 'tdev' ),
			'section'     => 'tdev_font',
			'type'		  => 'radio',
			'choices'	  => array(
								'400'		=>	'Normal',
								'700'		=>	'Semi-bold',
								'bold'		=>	'Bold'
								)
						)
				);

	// General font line height setting and control.
	$wp_customize->add_setting(
		'general_font_line_height',
			array(
				'default'			=>  1.1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'general_font_line_height',
			array(
				'label'   		=> __( 'General Font Line Height', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0,
									'max' => 3,
									'step' => .1,
								)
						)
				)
		);

	// Paragraph and root font color setting and control.
	$wp_customize->add_setting(
		'root_text_color',
			array(
				'default'           => '#3e3c3c',
				'transport'         => 'refresh',
			)
		);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'root_text_color',
			array(
				'label'       => __( 'Root Font Color', 'tdev' ),
				'description' => __( 'Apply color for root text', 'tdev' ),
				'section'     => 'tdev_font',
			)
		)
	);

	// Heading text font color setting and control.
	$wp_customize->add_setting(
		'heading_text_color',
			array(
				'default'           => '#3e3c3c',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_text_color',
			array(
				'label'       => __( 'Heading Font Color', 'tdev' ),
				'description' => __( 'Apply color for heading text', 'tdev' ),
				'section'     => 'tdev_font',
			)
		)
	);

	// Anchor text color setting and control.
	$wp_customize->add_setting(
		'anchor_text_color',
			array(
				'default'           => '#267aea',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'anchor_text_color',
			array(
				'label'       => __( 'Anchor Text Color', 'tdev' ),
				'description' => __( 'Apply anchor text color', 'tdev' ),
				'section'     => 'tdev_font',
			)
		)
	);
	
	// Anchor text color setting and control.
	$wp_customize->add_setting(
		'anchor_text_hover_color',
			array(
				'default'           => '#2e68b1',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'anchor_text_hover_color',
			array(
				'label'       => __( 'Anchor Text Hover Color', 'tdev' ),
				'description' => __( 'Apply anchor text hover color', 'tdev' ),
				'section'     => 'tdev_font',
			)
		)
	);
		
	// HTML text size setting and control.
	$wp_customize->add_setting(
		'html_global_text_size',
			array(
				'default'			=>  1.1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'html_global_text_size',
			array(
				'label'   		=> __( 'HTML Root Font Size (rem)', 'tdev' ),
				'description'	=> __( 'using rem', 'tdev'),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min' => 0,
									'max' => 3,
									'step' => .1,
								)
						)
				)
		);

	// Paragraph size setting and control
	$wp_customize->add_setting(
		'body_paragraph_text_size',
			array(
				'default'			=>  1.125,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'body_paragraph_text_size',
			array(
				'label'   		=> __( 'Paragraph Font Size (em)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 4,
									'step'	=> .125,
								)	
						)
				)
		);

	// h1 tag size setting and control.
	$wp_customize->add_setting(
		'h1_text_size',
			array(
				'default'			=>  1.5,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h1_text_size',
			array(
				'label'   		=> __( 'H1 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 5,
									'step'	=> .5,
								)	
						)
				)
		);

	// h2 tag size setting and control.
	$wp_customize->add_setting(
		'h2_text_size',
			array(
				'default'			=>  1.25,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h2_text_size',
			array(
				'label'   		=> __( 'H2 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 5,
									'step'	=> .25,
								)	
						)
				)
		);

	// h3 tag size setting and control.
	$wp_customize->add_setting(
		'h3_text_size',
			array(
				'default'			=>  1.1875,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h3_text_size',
			array(
				'label'   		=> __( 'H3 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=>  array(
									'min'	=> 0,
									'max'	=> 5,
									'step'	=> .625,
								)
						)
				)
		);

	// h4 tag size setting and control.
	$wp_customize->add_setting(
		'h4_text_size',
			array(
				'default'			=>  1.125,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h4_text_size',
			array(
				'label'   		=> __( 'H4 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 5,
									'step'	=> .375,
							)
					)
			)
	);

	// h5 tag size setting and control.
	$wp_customize->add_setting(
		'h5_text_size',
			array(
				'default'			=> 1.0625,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h5_text_size',
			array(
				'label'   		=> __( 'H5 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 4,
									'step'	=> .35417,
							)
					)
			)
	);

	// h5 tag size setting and control.
	$wp_customize->add_setting(
		'h6_text_size',
			array(
				'default'			=>	1,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'h6_text_size',
			array(
				'label'   		=> __( 'H6 size (rem)', 'tdev' ),
				'section' 		=> 'tdev_font',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 4,
									'step'	=> .5,
							)
					)
			)
	);
		
	// Pre, samp, kbd tag font family setting and control.
	$wp_customize->add_setting(
		'pre_samp_kbd_tag_font_choose',
			array(
				'default'		=> 'default',
				'type'       	=> 'theme_mod', 
				'transport'		=> 'refresh'
				)
		);
	
	$wp_customize->add_control(
		'pre_samp_kbd_tag_font_choose',
			array(
				'label'			=> __( 'Choose Pre Samp, Kbd tag Font Family' ),
				'section'		=> 'tdev_font',
				'type'			=> 'select',
				'choices'		=>	fonts()
					)
		);

	// Code font family setting and control.
	$wp_customize->add_setting(
		'code_font_choose',
			array(
				'default'		=> 'default',
				'type'       	=> 'theme_mod', 
				'transport'		=> 'refresh'
				)
		);
	
	$wp_customize->add_control(
			'code_font_choose',
				array(
					'label'			=> __( 'Choose Code Font Family' ),
					'section'		=> 'tdev_font',
					'type'			=> 'select',
					'choices'		=>	fonts()
					)
		);