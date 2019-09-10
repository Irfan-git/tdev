<?php

	// Input fields blog top area setting and control.
	$wp_customize->add_setting(
		'blog_top_option_choose',
			array(
				'default'			=> 'disable',
			)
		);

	$wp_customize->add_control(
		'blog_top_option_choose',
		array(
			'label'   		=> __( 'Blog Page Top Area option', 'tdev' ),
			'section' 		=> 'tdev_blog_controls',
			'type'    		=> 'radio',
			'choices'		=> array(
								'disable'	=>	'disable',
								'onepost'	=>	'Show 1 Sticky Post',
								'twopost'	=>	'Show 2 Sticky Posts'
							)
					)
			);

	// featured image post meta content overlay color setting and control
	$wp_customize->add_setting(
		'blog_top_feature_area_background_color',
			array(
				'default'			=> '#efefef',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'blog_top_feature_area_background_color',
			array(
				'label'         => __( 'Top Blog Feature area background color', 'tdev' ),
				'section'		=> 'tdev_blog_controls',
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

	// Comment area heading
	$wp_customize->add_setting(
		'header_font_style',
			array(
				'transport'         => 'postMessage',
			)
		);

	$wp_customize->add_control(
		'header_font_style',
		array(
			'label'       => __( 'Comment Area Control', 'tdev' ),
			'description' => __( 'Control comment and customize', 'tdev' ),
			'section'     => 'tdev_blog_controls',
			'type'		  => 'hidden'
			)
		);
				
	// Comment reply border color setting and control
	$wp_customize->add_setting(
		'comment_reply_border_color',
			array(
				'default'			=> 'rgba(255, 255, 255, 0.24)',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'comment_reply_border_color',
			array(
				'label'         => __( 'Reply side border', 'tdev' ),
				'section'		=> 'tdev_blog_controls',
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

	// Comment border size setting and control.
	$wp_customize->add_setting(
		'comment_reply_border_size',
			array(
				'default'			=>  2,
				'type'				=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control( 
			$wp_customize, 
			'comment_reply_border_size',
			array(
				'label'   		=> __( 'Comment reply border size', 'tdev' ),
				'section' 		=> 'tdev_blog_controls',
				'type'    		=> 'range',
				'input_attrs'	=> array(
									'min'	=> 0,
									'max'	=> 8,
									'step'	=> 1,
								)	
						)
				)
		);

	// Comment date setting and control.
	$wp_customize->add_setting(
		'comment_date_hide',
			array(
				'type'       		=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		'comment_date_hide',
		array(
			'label'       => __( 'Comment date hide', 'tdev' ),
			'section'     => 'tdev_blog_controls',
			'type'		  => 'checkbox'
			)
		);

	// Comment date setting and control.
	$wp_customize->add_setting(
		'comment_form_website_url_hide',
			array(
				'type'       		=> 'theme_mod',
				'transport'         => 'refresh'
			)
		);

	$wp_customize->add_control(
		'comment_form_website_url_hide',
		array(
			'label'       => __( 'Comment form website url hide', 'tdev' ),
			'section'     => 'tdev_blog_controls',
			'type'		  => 'checkbox'
			)
		);
		
	// featured image overlay color setting and control
	$wp_customize->add_setting(
		'post_feature_image_overlay_color',
			array(
				'default'			=> '#ececec',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'post_feature_image_overlay_color',
			array(
				'label'         => __( 'Feature image overlay color', 'tdev' ),
				'section'		=> 'tdev_blog_controls',
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

	// featured image post meta content overlay color setting and control
	$wp_customize->add_setting(
		'feature_image_meta_content_overlay_color',
			array(
				'default'			=> '#ececec',
				'type'				=> 'theme_mod',
				'capability'		=> 'edit_theme_options',
			)
		);

	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'feature_image_meta_content_overlay_color',
			array(
				'label'         => __( 'Feature image meta content overlay color', 'tdev' ),
				'section'		=> 'tdev_blog_controls',
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