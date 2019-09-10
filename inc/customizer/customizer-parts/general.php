<?php

    $wp_customize->add_panel(
        'tdev_general' ,
        array(
            'title'			=> __( 'General Options', 'tdev' ),
            'description'	=> __( 'Choose general option to customize', 'tdev' ),
            'priority'		=> 60,
            )
        );

	// Section for body customization
	$wp_customize->add_section(
        'tdev_font' ,
        array(
            'title'			=> __( 'Typography' ),
            'panel'			=> 'tdev_general',
        )
    );

	// Section for body customization
	$wp_customize->add_section(
		'tdev_input_fields' ,
		array(
			'title'			=> __( 'Input Fields' ),
			'panel'			=> 'tdev_general',
		)
	);

	// Section for body customization
	$wp_customize->add_section(
		'tdev_blog_controls' ,
		array(
			'title'			=> __( 'Blog Control' ),
			'panel'			=> 'tdev_general',
		)
	);
	

