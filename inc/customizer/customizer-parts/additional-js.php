<?php

    // Section for main additional js customization section
        $wp_customize->add_section(
            'tdev_additional_js' ,
            array(
                'title'			=> __( 'Additional JS' ),
                'priority'		=> 160, // Mixed with top-level-section hierarchy.
                )
        );

    // Footer copyright setting and control.
   $wp_customize->add_setting(
        'additional_js',
            array(
                'type'				=> 'theme_mod',
                'transport'         => 'refresh',
                )
        );

    $wp_customize->add_control(
        'additional_js',
        array(
            'label'   		=> __( 'Additional JS', 'tdev' ),
            'description'	=> __( 'Add your own JS code here to integrate the options and customize the appearance and layout of your site. Use &lt;script&gt; tag', 'tdev' ),
            'section' 		=> 'tdev_additional_js',
            'type'    		=> 'textarea'
                )
        );