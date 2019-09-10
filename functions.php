<?php




if ( ! function_exists( 'tdev_setup' )) {


// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );


    add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
	);
	
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40,
			'width'       => 250,
			'flex-height' => true,
		)
	);


    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
        

    function tdev_setup() {
        register_nav_menus( array(
            'primary'   =>  __( 'Primary', 'brandnxt' ),
            'test_menu'   =>  __( 'Test Menu', 'brandnxt' )
        ));
    }

}

add_action( 'after_setup_theme', 'tdev_setup' );


function tdev_widgets_init() {

	function footer_subscription_column(){

		$footer_column = get_theme_mod( 'footer_column' );

		if ( $footer_column == 'three_columns' ){
			return '<div id="%1$s" class="widget %2$s columns small-12 small-order-1 medium-order-3 medium-offset-1 medium-5 footer-item">';
		}
		if ( $footer_column == 'four_columns' ){
			return '<div id="%1$s" class="widget %2$s columns small-12 small-order-1 medium-order-4 medium-3 footer-item">';
		}

	}

	register_sidebar(
		array(
			'name'          => __( 'Top Blog Sidebar', 'tdev' ),
			'id'            => 'top-blog-sidebar',
			'description'   => __( 'Add widget here to appear in top area of the blog sidebar.', 'tdev' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s top-blog-sidebar-item-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="sidebar-heading"><h3>',
			'after_title'   => '</h3></div>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Top Sidebar', 'tdev' ),
			'id'            => 'sidebar-top',
			'description'   => __( 'Add widget here to appear in top of the sidebar.', 'tdev' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s top-sidebar-item-wrapper sidebar-item-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="sidebar-heading"><h3>',
			'after_title'   => '</h3></div>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => __( 'Sticky Sidebar Bottom', 'tdev' ),
			'id'            => 'sticky-sidebar-bottom',
			'description'   => __( 'Add widget here to appear in sticky sidebar in the bottom.', 'tdev' ),
			'before_widget' => '<div id="sidebar-sticky-container-top-anchor" data-sticky-container></div><div id="%1$s" class="widget %2$s sidebar-item-wrapper sticky" data-sticky data-margin-top="7" data-top-anchor="sidebar-sticky-container-top-anchor" data-btm-anchor="footer-wrapper:top">',
			'after_widget'  => '<div class="sidebar-sticky-gap"></div></div>',
			'before_title'  => '<div class="sidebar-heading"><h3>',
			'after_title'   => '</h3></div>',
		)
    );

    register_sidebar(
		array(
			'name'          => __( 'Footer Widget 1', 'tdev' ),
			'id'            => 'footer-widget-1',
			'description'   => __( 'Add widget here, to appear in left in desktop and center in small devices.', 'tdev' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s columns small-12 small-order-2 medium-order-1 medium-3 footer-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-title"><h4>',
			'after_title'   => '</h4></div>',
		)
		);
		
		register_sidebar(
				array(
					'name'          => __( 'Footer Widget 2', 'tdev' ),
					'id'            => 'footer-widget-2',
					'description'   => __( 'Add widget here, to appear in center in desktop and bottom in small devices.', 'tdev' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s columns small-12 small-order-3 medium-order-2 medium-3 footer-item">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="footer-title"><h4>',
					'after_title'   => '</h4></div>',
				)
		);

		$footer_column = get_theme_mod( 'footer_column' );

		if ( $footer_column == 'four_columns' ){

			register_sidebar(
							array(
								'name'          => __( 'Footer Widget 3', 'tdev' ),
								'id'            => 'footer-widget-3',
								'description'   => __( 'Add widget here, to appear in center in desktop and bottom in small devices.', 'tdev' ),
								'before_widget' => '<div id="%1$s" class="widget %2$s columns small-12 small-order-4 medium-order-3 medium-3 footer-item">',
								'after_widget'  => '</div>',
								'before_title'  => '<div class="footer-title"><h4>',
								'after_title'   => '</h4></div>',
							)
				);

		}

    register_sidebar(
		array(
			'name'          => __( 'Footer Subscription', 'tdev' ),
			'id'            => 'footer-subscription',
			'description'   => __( 'Add footer subscription here. That will show right in desktop and top in small devices.', 'tdev' ),
			'before_widget' => footer_subscription_column(),
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => __( 'No Content Page Top', 'tdev' ),
			'id'            => 'no-content-page-top',
			'description'   => __( 'Add top Contents that will be shown in No content page top area.', 'tdev' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => __( 'No Content Page Bottom', 'tdev' ),
			'id'            => 'no-content-page-bottom',
			'description'   => __( 'Add Contents that will be shown in No content page bottom area.', 'tdev' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
    );

}
add_action( 'widgets_init', 'tdev_widgets_init' );


function main_theme_assets(){

		wp_enqueue_style(	'material_icon',
											'https://fonts.googleapis.com/icon?family=Material+Icons',
											false,
											'',
											'all'
										);

										
		wp_enqueue_style(	'main_style',
											get_template_directory_uri().'/assets/css/main.css',
											false,
											'11.42',
											'all'
										);

	
		wp_enqueue_script( 'master-framwork-js',
												get_template_directory_uri().'/assets/js/master-framwork.js',
												array( 'jquery' ),
												'',
												true
											);

		wp_enqueue_script( 'what-input-js',
												get_template_directory_uri().'/assets/js/what-input.js',
												array( 'jquery' ),
												'',
												true
											);

		wp_enqueue_script( 'test-menu-js',
											get_template_directory_uri().'/assets/js/jquery.flexnav.min.js',
											array( 'jquery' ),
											'1.72',
											true
										);
		
		wp_enqueue_script( 'custom-js',
											get_template_directory_uri().'/assets/js/custom.js',
											array( 'jquery', 'test-menu-js' ),
											'1.25',
											true
										);

		if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

}

add_action('wp_enqueue_scripts', 'main_theme_assets');


/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-tdev-walker-comment.php';



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/post-types/post-types.php';
