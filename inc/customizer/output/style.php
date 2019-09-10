<?php

add_action( 'wp_head', 'tdev_customizer_frontend_css' );

function tdev_customizer_frontend_css(){

?>

<style type="text/css">


/**
*  logo options from "site identity" section
**/

.header-logo img{
    padding: <?php echo get_theme_mod( 'logo_margin_top_bottom' ) . '% ' . get_theme_mod( 'logo_margin_left_right' ) .'%'; ?>;
}

/***
*   Header color options from "header color" section of "header and navigation panel"
****/

.header-wrapper .sticky.is-anchored{
    background: <?php echo get_theme_mod( 'header_beginning_background_color' );?>;
}

.header-wrapper .is-stuck{
    background: <?php echo get_theme_mod( 'sticky_header_background_color' );?>;
}

/******
*   Skip link and Menu optoions from "header menu settings" section of "header and navigation panel"
******/
.show-on-focus:active, .show-on-focus:focus {
    background: <?php echo get_theme_mod( 'cta_button_background' ); ?>;
    font-size: <?php echo get_theme_mod( 'cta_button_text_size' ) .'px';?>;
    color: <?php echo get_theme_mod( 'cta_button_text_color' ); ?>;
}

.flexnav li {
    font-size: <?php echo get_theme_mod( 'header_fst_level_menu_item_text_size' );?>em;
}

.flexnav li a {
    color: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    padding: <?php echo get_theme_mod( 'header_menu_item_top_bottom_size' ). 'px' ; ?> <?php echo get_theme_mod( 'header_menu_item_left_right_size' ). 'px' ; ?>;
}

.flexnav li a:hover,
.flexnav .current-menu-item a{
    color: <?php echo get_theme_mod( 'header_fst_level_menu_select_text_color' );?>;
    box-shadow: 0 <?php echo get_theme_mod( 'header_fst_level_menu_select_border_size' ) .'px 0 0 '. get_theme_mod( 'header_fst_level_menu_select_text_color' ); ?>;
}

.flexnav li .touch-button .material-icons{
    font-size: <?php echo get_theme_mod( 'header_fst_level_menu_item_text_size' );?>em;
    color: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
}

.flexnav li .touch-button:hover,
.flexnav .current-menu-item .touch-button .material-icons{
    color: <?php echo get_theme_mod( 'header_fst_level_menu_select_text_color' );?>;
}

.flexnav li ul li a,
.flexnav .current-menu-item ul li a{
    padding: <?php echo get_theme_mod( 'header_scnd_lvl_menu_item_top_bottom_size' ). 'px ' . get_theme_mod( 'header_scnd_lvl_menu_item_left_right_size' ). 'px' ; ?>;
    font-size: <?php echo get_theme_mod( 'header_scnd_level_menu_item_text_size' );?>em;
    background: <?php echo get_theme_mod( 'header_scnd_level_menu_background_color' );?>;
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
    box-shadow: none;
}

.flexnav ul li ul li a,
.flexnav ul li ul li ul li a,
.flexnav li ul .current-menu-item ul li a{
    background: <?php echo get_theme_mod( 'header_scnd_level_menu_background_color' );?>;
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.flexnav ul li a:hover,
.flexnav li ul .current-menu-item a,
.flexnav li ul .current-menu-item a:hover{
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
    background: <?php echo get_theme_mod( 'header_fst_level_menu_select_text_color' );?>;
    box-shadow: none;
}

.flexnav li ul li .touch-button .material-icons,
.flexnav .current-menu-item ul li .touch-button .material-icons{
        font-size: <?php echo get_theme_mod( 'header_scnd_level_menu_item_text_size' );?>em;
        color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.flexnav li ul .current-menu-item .touch-button .material-icons{
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.menu-button{
    color: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    border-top: 2px solid <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    border-bottom: 2px solid <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
}

@media screen and (max-width: 800px) {

.flexnav li a{
    border-bottom: 1px solid <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
}

.flexnav li ul li a{   
    border-bottom: 1px solid <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.flexnav li .touch-button .material-icons{
    padding: 10px;
    display: inline;
    background: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.flexnav .current-menu-item .touch-button .material-icons{
    padding: 10px;
    display: inline;
    background: <?php echo get_theme_mod( 'header_fst_level_menu_select_text_color' );?>;
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

.flexnav li ul li .touch-button .material-icons,
.flexnav .current-menu-item ul li .touch-button .material-icons,
.flexnav li ul .current-menu-item .touch-button .material-icons{
    padding: 10px;
    background: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
    color: <?php echo get_theme_mod( 'header_fst_level_menu_select_text_color' );?>;
    display: inline;
}

}

.nav-toggle{
    padding: <?php echo get_theme_mod( 'mobile_menu_button_top_bottom_size' ). 'em ' . get_theme_mod( 'mobile_menu_button_left_right_size' ). 'em' ; ?>;
    margin-top: <?php echo get_theme_mod( 'mobile_menu_button_margin_top_gap' ) . 'px' ;?>;
    margin-bottom: <?php echo get_theme_mod( 'mobile_menu_button_margin_bottom_gap' ) . 'px' ;?>;
    border: 1px solid <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    color: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    font-size: <?php echo get_theme_mod( 'mobile_menu_button_content_size' ) . 'em' ;  ?>;
    font-weight: bold;
}

.js .nav-collapse .dropdown-toggle {
    border: 1px solid <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
    color: <?php echo get_theme_mod( 'header_fst_level_menu_color' );?>;
}

.js .nav-collapse ul li ul .dropdown-toggle {
    border: 1px solid <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
    color: <?php echo get_theme_mod( 'header_scnd_level_menu_text_color' );?>;
}

/*******
*   CTA button of header from "Header CTA Button" section of "Header and Navigation" panel
*******/

.header-large-contact-column .header-contact-text{
    margin-top: <?php echo get_theme_mod( 'cta_button_margin_top' );?>px;
}

.header-contact-text{
    padding: <?php echo get_theme_mod( 'cta_button_top_bottom_size' ). 'px ' . get_theme_mod( 'cta_button_left_right_size' ). 'px'; ?>;
    background: <?php echo get_theme_mod( 'cta_button_background' ); ?>;
    font-size: <?php echo get_theme_mod( 'cta_button_text_size' ) .'px';?>;
    color: <?php echo get_theme_mod( 'cta_button_text_color' ); ?>;
    border: <?php echo get_theme_mod( 'cta_button_border_size' ). 'px solid ' .get_theme_mod( 'cta_button_background' ); ?>;
    border-radius: <?php echo get_theme_mod('cta_button_border_radius_size') . 'px'; ?>;
}

.header-small-contact-column .header-contact-text{
    padding: <?php echo get_theme_mod( 'cta_button_top_bottom_size' ). 'px ' . get_theme_mod( 'cta_button_left_right_size' ).'px'; ?>;

}

.header-contact-text:hover,
.header-contact-text:focus,
.header-contact-text:active{
    background: <?php echo get_theme_mod( 'cta_button_select_background' ); ?>;
    color: <?php echo get_theme_mod( 'cta_button_select_text_color' ); ?>;
    border-color: <?php echo get_theme_mod( 'cta_button_select_text_color' ); ?>;
}

.featured-post .sidebar-page-article{
    border-top: 10px solid <?php echo get_theme_mod( 'cta_button_background' ); ?>;
}

/****
*   body control options from "body layout" section
****/

.content-wrapper {
    background: <?php echo get_theme_mod( 'body_background_color' ); ?>;
}

/***
* typography option from "Typography" option of "General Options" panel
***/

html,
body,
p,
button,
input,
optgroup,
select,
textarea{
    font-family: <?php echo get_theme_mod( 'general_font_choose' ); ?>;
}

html,
p,
body {
    font-weight: <?php echo get_theme_mod( 'general_font_weight' ); ?>;
    line-height: <?php echo get_theme_mod( 'general_font_line_height' ) . 'em' ; ?>;
    color: <?php echo get_theme_mod( 'root_text_color' ); ?>;
}

html {
    font-size: <?php echo get_theme_mod( 'html_global_text_size' ). 'rem' ; ?>;
}

body,
p {
    font-size: <?php echo get_theme_mod( 'body_paragraph_text_size' ) . 'em' ; ?>;
}

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
    font-family: <?php echo get_theme_mod( 'heading_font_choose' ); ?>;
    font-weight: <?php echo get_theme_mod( 'header_font_weight' ); ?>;
    font-style: <?php echo get_theme_mod( 'header_font_italic' ) ? 'italic': '' ; ?>;
    text-decoration: <?php echo get_theme_mod( 'header_font_underline' ) ? 'underline': '' ; ?>;
    line-height: <?php echo get_theme_mod( 'header_font_line_height' ) . 'em'; ?>;
    color: <?php echo get_theme_mod( 'heading_text_color' ); ?>;
}

h1, .h1 {
    font-size: <?php echo get_theme_mod( 'h1_text_size' ) . 'rem' ; ?>;
}

h2, .h2 {
    font-size: <?php echo get_theme_mod( 'h2_text_size' ) . 'rem' ; ?>;
}

h3, .h3 {
    font-size: <?php echo get_theme_mod( 'h3_text_size' ) . 'rem' ; ?>;
}

h4, .h4 {
    font-size: <?php echo get_theme_mod( 'h4_text_size' ) . 'rem' ; ?>;
}

h5, .h5 {
    font-size: <?php echo get_theme_mod( 'h5_text_size' ) . 'rem' ; ?>;
}

h6, .h6 {
    font-size: <?php echo get_theme_mod( 'h6_text_size' ) . 'rem' ; ?>;
}

.others-page-gap h1{
    font-size: <?php echo get_theme_mod( 'h2_text_size' ) . 'rem' ; ?>;
}

a{
    color: <?php echo get_theme_mod( 'anchor_text_color' ); ?>;
}

a:hover, a:focus {
    color: <?php echo get_theme_mod( 'anchor_text_hover_color' ); ?>; }

pre,
samp,
kbd{
    font-family: <?php echo get_theme_mod( 'pre_samp_kbd_tag_font_choose' ); ?>;
}

code{
    font-family: <?php echo get_theme_mod( 'code_font_choose' ); ?>;
}

/*****
*   Control the button and form option from "Input Fields" option of "General Options" panel
*****/

.input-group-button button,
.button{
    padding: <?php echo get_theme_mod( 'button_top_bottom' ) . 'em ' . get_theme_mod( 'button_left_right' ).'em'; ?>;
    border: <?php echo get_theme_mod( 'button_border_size' ) . 'px solid ' . get_theme_mod( 'gnrl_button_background' ); ?>;
    background: <?php echo get_theme_mod( 'gnrl_button_background' ); ?>;
    color: <?php echo get_theme_mod( 'gnrl_button_text_color' ); ?>;
    font-size: <?php echo get_theme_mod( 'button_font_size' ) . 'em'; ?>;
}

.input-group-button button:hover,
.input-group-button button:active,
.input-group-button button:focus,
.button:hover,
.button:active,
.button:focus{
    background: <?php echo get_theme_mod( 'gnrl_button_select_background' ); ?>;
    color: <?php echo get_theme_mod( 'gnrl_button_select_text_color' ); ?>;
    border-color: <?php echo get_theme_mod( 'gnrl_button_select_text_color' ); ?>;
}

textarea,
select,
button,
kbd,
[type='text'],
[type='password'],
[type='date'],
[type='datetime'],
[type='datetime-local'],
[type='month'],
[type='week'],
[type='email'],
[type='number'],
[type='search'],
[type='tel'],
[type='time'],
[type='url'],
[type='color'],
textarea,
[type='submit'],
[type='button'],
.input-group-field,
.button,
.slider-handle,
.switch-paddle,
.switch-paddle::after,
.pagination li,.pagination a,
.pagination a,
.pagination button,
.pagination .current,
.dropdown-pane,
.callout,
.card,
.reveal,
.reveal.full,
table,
.progress,
.progress-meter,
.progress-meter-text,
.tooltip,
.thumbnail,
.collapse-button,
.collapse-button .icon-bar,
.top-blog-area-wrapper .input-group .button,
.tdev-comment-wrapper,
.subscription-form .input-group .button,
.subscription-form .input-group > :last-child > *{
    border-radius: <?php echo get_theme_mod( 'elmnts_border_radius' ) .'px' ; ?>;
}

.tdev-search-form .input-group .input-group-field,
[type='text'],
[type='password'],
[type='date'],
[type='datetime'],
[type='datetime-local'],
[type='month'],
[type='week'],
[type='email'],
[type='number'],
[type='search'],
[type='tel'],
[type='time'],
[type='url'],
[type='color'],
textarea{
    font-size: <?php echo get_theme_mod( 'input_area_font_size' ); ?>rem;
    background: <?php echo get_theme_mod( 'input_background_color' ); ?>;
    color: <?php echo get_theme_mod( 'input_font_color' ); ?>;
    border-bottom: <?php echo get_theme_mod( 'input_border_size' ) . 'px solid ' .  get_theme_mod( 'input_border_color' ); ?> ;
}


input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
    color: <?php echo get_theme_mod( 'input_fields_placeholder_font_color' ); ?>;
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    color: <?php echo get_theme_mod( 'input_fields_placeholder_font_color' ); ?>;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
    color: <?php echo get_theme_mod( 'input_fields_placeholder_font_color' ); ?>;
}

input::placeholder,
textarea::placeholder {
    color: <?php echo get_theme_mod( 'input_fields_placeholder_font_color' ); ?>;
}


}
@media screen and (max-width: 39.9375em) {
.reveal {
    border-radius: <?php echo get_theme_mod( 'input_border_radius' ) .'px' ; ?>;
    } 
}



.input-group > :first-child {
    border-radius: <?php echo get_theme_mod( 'input_border_radius' ) .'px' ; ?> 0 0 <?php echo get_theme_mod( 'input_border_radius' ) .'px' ; ?>;
}

.input-group > :last-child > * {
    border-radius: 0 <?php echo get_theme_mod( 'input_border_radius' ) .'px '. get_theme_mod( 'input_border_radius' ) .'px' ; ?> 0;
}

.accordion-item:first-child > :first-child {
    border-radius: <?php echo get_theme_mod( 'input_border_radius' ) .'px '. get_theme_mod( 'input_border_radius' ) .'px' ; ?> 0 0;
}

.accordion-item:last-child > :last-child {
    border-radius: 0 0 <?php echo get_theme_mod( 'input_border_radius' ) .'px '. get_theme_mod( 'input_border_radius' ) .'px' ; ?>;
}

:last-child:not(.is-active) > .accordion-title {
    border-radius: 0 0 <?php echo get_theme_mod( 'input_border_radius' ) .'px '. get_theme_mod( 'input_border_radius' ) .'px' ; ?>;
}

.tdev-comment-reply .comment-reply-link{
    padding: <?php echo get_theme_mod( 'button_top_bottom' ) . 'em ' . get_theme_mod( 'button_left_right' ).'em'; ?>;
    border: <?php echo get_theme_mod( 'button_border_size' ) . 'px solid ' . get_theme_mod( 'gnrl_button_background' ); ?>;
    background: <?php echo get_theme_mod( 'gnrl_button_background' ); ?>;
    color: <?php echo get_theme_mod( 'gnrl_button_text_color' ); ?>;
    font-size: <?php echo get_theme_mod( 'button_font_size' ) . 'em'; ?>;
    border-radius: <?php echo get_theme_mod( 'elmnts_border_radius' ) .'px' ; ?>;
}

.tdev-comment-reply .comment-reply-link:hover,
.tdev-comment-reply .comment-reply-link:focus,
.tdev-comment-reply .comment-reply-link:active{
    background: <?php echo get_theme_mod( 'gnrl_button_text_color' ); ?>;
    color: <?php echo get_theme_mod( 'gnrl_button_background' ); ?>;
}

/*****
*   Control the comment option of "General Options" panel
*****/
.comments-area .children .tdev-comment-wrapper{
    border-left: <?php echo get_theme_mod( 'comment_reply_border_size' ) .'px solid '. get_theme_mod( 'comment_reply_border_color' ); ?>;
}

/*****
*   Control the single post option of "General Options" panel
*****/

.top-blog-area-wrapper,
.sidebar-page-article{
    background: <?php echo get_theme_mod( 'blog_top_feature_area_background_color' ); ?>;
}

.image-thumbnail-filter .article-main-meta .post-thumbnail:after,.image-thumbnail-filter .top-featured-article-main-meta .post-thumbnail:after{
    background: <?php echo get_theme_mod( 'post_feature_image_overlay_color' ); ?>;
}

.top-featured-article-title,
.top-featured-one-post-article-title,
.featured-article-meta-extra,
.single-article .article-main-meta .single-title,
.single-article .article-meta .article-author,
.single-article .article-meta .article-date{
background: <?php echo get_theme_mod( 'feature_image_meta_content_overlay_color' ); ?>;
}

/*****
*   Control the footer option from "Footer" section
*****/

.footer-main-wrapper {
    background: <?php echo get_theme_mod( 'footer_main_background' ) ; ?>;
}

.footer-bottom-wrapper{
    background: <?php echo get_theme_mod( 'footer_bottom_background' ) ; ?>;
}

</style>

<?php

}

