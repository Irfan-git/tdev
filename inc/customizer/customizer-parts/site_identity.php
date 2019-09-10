<?php


$wp_customize->get_setting('blogname')->transport = 'postmessage';

$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';


if ( isset( $wp_customize->selective_refresh ) ) {

	
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
				'selector'        => '.header-logo a',
				'render_callback' => 'tdev_customize_partial_blogname',
			)
		);

		$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'tdev_customize_partial_blogdescription',
		)
	);
}



	//	Using built in 
	//	customizer section
	
	// Show site description setting and control
	$wp_customize->add_setting(	'show_site_description' );

	$wp_customize->add_control(
		'show_site_description',
			array(
				'label'   		=> __( 'Show site description', 'tdev' ),
				'type'			=> 'checkbox',
				'section'		=> 'title_tagline',
				)
			);

	//	Logo margin top and bottom setting and control
	$wp_customize->add_setting(
		'logo_margin_top_bottom',
			array(
				'default'		=> 6
			)
	);

	$wp_customize->add_control(
		new Customizer_Range_Value_Control(
            $wp_customize, 
			'logo_margin_top_bottom',
			array(
				'label'   		=> __( 'Top & Bottom Gap of Logo', 'tdev' ),
				'type'    		=> 'range',
				'section' 		=> 'title_tagline',
				'input_attrs' => array(
									'min' => 0,
									'max' => 15,
									'step' => 1,
								)
						)
				)
		);

	// Logo margin left and right setting and control
	$wp_customize->add_setting(	
			'logo_margin_left_right',
			array(
				'default'		=> 0
			)
		);

	$wp_customize->add_control(
        new Customizer_Range_Value_Control(
            $wp_customize, 
			'logo_margin_left_right',
			array(
				'label'   		=> __( 'Left and Right Gap of Logo', 'tdev' ),
				'type'			=> 'range',
				'section'		=> 'title_tagline',
				'input_attrs' => array(
									'min' => 0,
									'max' => 15,
									'step' => 1,
								)
						)
				)
		);


