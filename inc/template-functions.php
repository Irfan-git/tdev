<?php

if ( ! function_exists( 'tdev_the_breadcrumb' ) ) :

	function tdev_the_breadcrumb() {
		$sep = ' / ';
		if (!is_front_page()) {
		
		// Start the breadcrumb with a link to your homepage
			echo '<div class="tdev-breadcrumbs" aria-label="Breadcrumb">';
			echo '<a href="';
			echo get_option('home');
			echo '">';
			bloginfo('name');
			echo '</a>' . $sep;
		
		// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
			if (is_category() || is_single() ){
				the_category(', ');
			} elseif (is_archive() || is_single()){
				if ( is_day() ) {
					printf( __( '%s', 'text_domain' ), get_the_date() );
				} elseif ( is_month() ) {
					printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
				} elseif ( is_year() ) {
					printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
				} else {
					_e( 'Blog Archives', 'text_domain' );
				}
			}
		
		// If the current page is a single post, show its title with the separator
			if (is_single()) {
				echo $sep;
				the_title();
			}
		
		// If the current page is a static page, show its title.
			if (is_page()) {
				echo the_title();
			}
		
		// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
			if (is_home()){
				global $post;
				$page_for_posts_id = get_option('page_for_posts');
				if ( $page_for_posts_id ) { 
					$post = get_page($page_for_posts_id);
					setup_postdata($post);
					the_title();
					rewind_posts();
				}
			}
			echo '</div>';
		}
	}

endif;

function tdev_can_show_post_thumbnail() {
	return apply_filters( 'tdev_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}


function tdev_post_thumbnail_sizes_attr( $attr ) {

	if ( is_admin() ) {
		return $attr;
	}

	if ( ! is_singular() ) {
		$attr['sizes'] = '(max-width: 34.9rem) calc(100vw - 2rem), (max-width: 53rem) calc(8 * (100vw / 12)), (min-width: 53rem) calc(6 * (100vw / 12)), 100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'tdev_post_thumbnail_sizes_attr', 10, 1 );
 
function tdev_get_avatar_size() {
	return 60;
}

/**
 * Returns information about the current post's discussion, with cache support.
 */
function tdev_get_discussion_data() {
	static $discussion, $post_id;

	$current_post_id = get_the_ID();
	if ( $current_post_id === $post_id ) {
		return $discussion; /* If we have discussion information for post ID, return cached object */
	} else {
		$post_id = $current_post_id;
	}

	$comments = get_comments(
		array(
			'post_id' => $current_post_id,
			'orderby' => 'comment_date_gmt',
			'order'   => get_option( 'comment_order', 'asc' ), /* Respect comment order from Settings » Discussion. */
			'status'  => 'approve',
			'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
		)
	);

	$authors = array();
	foreach ( $comments as $comment ) {
		$authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
	}

	$authors    = array_unique( $authors );
	$discussion = (object) array(
		'authors'   => array_slice( $authors, 0, 6 ),           /* Six unique authors commenting on the post. */
		'responses' => get_comments_number( $current_post_id ), /* Number of responses. */
	);

	return $discussion;
}

