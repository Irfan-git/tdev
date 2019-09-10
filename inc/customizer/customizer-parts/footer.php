<?php

   	// Section for main footer customization section
	$wp_customize->add_section(
		'tdev_footer_section' ,
		array(
			'title'			=> __( 'Footer' ),
            'priority'		=> 110, // Mixed with top-level-section hierarchy.
			)
	);

    // Add main footer background color setting and control.
	$wp_customize->add_setting(
        'footer_main_background',
        array(
            'default'			=> 'rgba(209,0,55,0.7)'
        )
    );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'footer_main_background',
            array(
                'label'         => __( 'Footer Main Background', 'tdev' ),
                'description'	=> __( 'Apply footer main background color', 'tdev' ),
                'section'		=> 'tdev_footer_section',
                'settings'      => 'footer_main_background',
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

    // Add bottom footer background color setting and control.
	$wp_customize->add_setting(
        'footer_bottom_background',
        array(
            'default'			=> 'rgba(209,0,55,0.7)'
        )
    );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'footer_bottom_background',
            array(
                'label'         => __( 'Footer Bottom Background', 'tdev' ),
                'description'	=> __( 'Apply bottom footer background color', 'tdev' ),
                'section'		=> 'tdev_footer_section',
                'settings'      => 'footer_bottom_background',
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
    
    // Footer Columns setting and control.
    $wp_customize->add_setting(
        'footer_column',
            array(
                'default'			=> 'three_columns'
            )
        );

    $wp_customize->add_control(
        'footer_column',
        array(
            'label'   		=> __( 'Footer Columns', 'tdev' ),
            'section' 		=> 'tdev_footer_section',
            'type'    		=> 'select',
            'choices'   	=> array(
                                'three_columns'	=> 'Three Columns',
                                'four_columns'	=> 'Four Columns'
                        )
                )
        );

   // Footer copyright setting and control.
   $wp_customize->add_setting(
    'footer_copyright',
        array(
            'default'			=> 'copyright'
            )
    );

    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'   		=> __( 'Footer Copyright Content', 'tdev' ),
            'section' 		=> 'tdev_footer_section',
            'type'    		=> 'textarea'
                )
        );

    // Add social media color setting and control.
	$wp_customize->add_setting(
        'social_media_color',
        array(
            'default'			=> 'rgba(209,0,55,0.7)'
        )
    );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control(
            $wp_customize,
            'social_media_color',
            array(
                'label'         => __( 'Social Media Color', 'tdev' ),
                'description'	=> __( 'Apply social media color', 'tdev' ),
                'section'		=> 'tdev_footer_section',
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

   // Footer linkedin url setting and control.
   $wp_customize->add_setting(
    'footer_linkedin_url',
        array(
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
    'footer_linkedin_url',
    array(
        'label'   		=> __( 'Linkedin URL', 'tdev' ),
        'section' 		=> 'tdev_footer_section',
        'type'    		=> 'url'
            )
    );                    
 
    // Footer facebook url setting and control.
    $wp_customize->add_setting(
    'footer_fb_url',
        array(
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
    'footer_fb_url',
        array(
            'label'   		=> __( 'Facebook URL', 'tdev' ),
            'section' 		=> 'tdev_footer_section',
            'type'    		=> 'url'
                )
        );

   // Footer twitter url setting and control.
   $wp_customize->add_setting(
    'footer_twitter_url',
        array(
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
    'footer_twitter_url',
    array(
        'label'   		=> __( 'Twitter URL', 'tdev' ),
        'section' 		=> 'tdev_footer_section',
        'type'    		=> 'url'
            )
    );

    // Footer instagram url setting and control.
   $wp_customize->add_setting(
    'footer_instagram_url',
        array(
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
    'footer_instagram_url',
    array(
        'label'   		=> __( 'Instagram URL', 'tdev' ),
        'section' 		=> 'tdev_footer_section',
        'type'    		=> 'url'
            )
    );

   // Footer youtube url setting and control.
   $wp_customize->add_setting(
    'footer_youtube_url',
        array(
            'type'				=> 'theme_mod',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
    'footer_youtube_url',
    array(
        'label'   		=> __( 'YouTube URL', 'tdev' ),
        'section' 		=> 'tdev_footer_section',
        'type'    		=> 'url'
            )
    );           

    