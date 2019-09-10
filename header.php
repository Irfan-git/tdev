<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

    <?php echo get_theme_mod('head_google_font_family_style'); ?>

</head>

<body <?php body_class(); ?>>

    <div class="skip-link-section">
        <a class="show-on-focus" href="#mainContent">Skip to Content</a>
    </div>

    <header class="header-wrapper" data-sticky-container>
    <?php if( is_admin_bar_showing() ):
            ?>
        <div class="header-large-screen sticky admin-sticky" data-sticky data-top-anchor="wpadminbar" data-btm-anchor="footer-wrapper:top">
            <?php
                else:
            ?>
        <div class="header-large-screen sticky" data-sticky data-margin-top="0" data-btm-anchor="footer-wrapper:top">
        <?php
                endif;
            ?>
        <div class="row main-header wrapper-container">

        <div class="columns large-10 medium-10 small-12">
            <div class="header-logo float-left columns shrink">
                
            <?php 
                if ( has_custom_logo() ) : 
                        the_custom_logo(); 
                else:
            ?>
                <p class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </p>
            <?php
            endif;

            $show_description = get_theme_mod( 'show_site_description' );
            $description_text = get_bloginfo( 'description', 'display' ); 

            if( $show_description == true ):
            ?>
               <p> <?php echo $description_text; ?> </p>
            <?php
            endif;
            ?>

            </div><!-- logo end -->
            
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="menu-container float-right columns">

                <button class="menu-button separator-center">MENU</button>
                    <?php
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'flexnav',
                                'items_wrap'     => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>'
                                )
                        );
                    ?>

            </nav>  <!-- / menu -->
            <?php endif; ?>

        </div>
            
                <div class="columns large-2 medium-2 header-large-contact-column hide-for-small-only">
                <a href="<?php echo get_theme_mod( 'cta_button_url' ); ?>" role="button">
                    <div class="header-contact">
                        <div class="header-contact-text"><?php echo get_theme_mod( 'cta_button_text' ); ?></div>
                    </div> <!-- / header-contact -->
                </a>
                </div>  <!-- / header-contact-column-->
        </div>  <!-- / wrapper-container -->
    </div>  <!-- / header-large-screen -->

        <div class="header-small-screen show-for-small-only" data-sticky-container>
            <div class="row sticky" data-sticky data-margin-top="0" data-btm-anchor="footer-wrapper:top" data-sticky-on="small">
                <div class="small-12 header-small-contact-column columns">
                    <a href="<?php echo get_theme_mod( 'cta_button_url' ); ?>" role="button">
                        <div class="header-contact">
                            <div class="header-contact-text"><?php echo get_theme_mod( 'cta_button_text' ); ?></div>                                            
                        </div> <!-- / header-contact -->
                    </a>
                </div>  <!-- / header-small-contact-column -->
            </div>      <!-- / row -->
        </div>      <!-- / header-small-screen -->
    </header>


<main id="mainContent" class="wrapper-container content-wrapper">
