<?php

add_action( 'customize_register', 'my_customize_register') ;

function my_customize_register( $wp_customize ) {

	// extend control of customizer
	// alpha color picker
	require get_template_directory() . '/inc/customizer/extends/range-control.php';
	
	// soderlind range control
	require get_template_directory() . '/inc/customizer/extends/color-picker.php';

	// google fonts select
	// require get_template_directory() . '/inc/customizer/extends/google-fonts-select.php';



	// customizer parts
	// Identity area setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/site_identity.php';

	// Header and navigation area setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/header_nav.php';

	// Body area customizer setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/body.php';

	// Others area customizer setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/general.php';

	require get_template_directory(). '/inc/customizer/customizer-parts/general-typography.php';
	
	require get_template_directory(). '/inc/customizer/customizer-parts/general-input-fields.php';

	require get_template_directory(). '/inc/customizer/customizer-parts/general-blog-control.php';

	// Footer area customizer setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/footer.php';

	// Additional JS area customizer setting and control
	require get_template_directory() . '/inc/customizer/customizer-parts/additional-js.php';

}

/***
*	Fornt-end CSS
**/
require get_template_directory() . '/inc/customizer/output/style.php';

/***
*	Font lists
**/
require get_template_directory() . '/inc/customizer/extends/fonts-list.php';


