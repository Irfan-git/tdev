<?php

// beginning of tdev_posted_by function {

if ( ! function_exists( 'tdev_posted_by' ) ) :
	/**
	 * Prints HTML with meta information about theme author.
	 */
	function tdev_posted_by() {

		$author_icon = 'person';

		printf(
			'<div class="article-author">
			<figure class="author-image"><i class="material-icons">%1$s</i></figure>
			%2$s<a class="author-name" href="%3$s">%4$s</a>
			</div>',
			$author_icon,
			__( 'Posted by', 'tdev' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);
	}
endif;

// } end of tdev_posted_by function
// beginning of featured_post_tdev_posted_by function {

if ( ! function_exists( 'featured_post_tdev_posted_by' ) ) :
	/**
	 * Prints HTML with meta information about theme author.
	 */
	function featured_post_tdev_posted_by() {

		$author_icon = 'person';

		printf(
			'<div class="article-author">
			<figure class="author-image"><i class="material-icons">%1$s</i></figure>
			%2$s<a class="author-name" href="%3$s">%4$s</a>
			</div>',
			$author_icon,
			__( 'Posted by', 'tdev' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);
	}
endif;

// } ending of featured_post_tdev_posted_by function

?>



<?php

// beginning of tdev_posted_on {

if ( ! function_exists( 'tdev_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function tdev_posted_on() {

		$time_string = '<time class="published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="published" datetime="%1$s">%2$s</time>
							<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		

		printf(
			'<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		);
	}

endif;

// } end of tdev_posted_on function
// beginnning of tdev_single_posted_on function {

if( ! function_exists( 'tdev_single_posted_on' ) ):

	function tdev_single_posted_on() {

		$access_time = 'access_time';


		$time_string = '<i class="material-icons">%1$s</i>
						<time class="published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

			$time_string = '<i class="material-icons">%1$s</i>
							<time class="published" datetime="%2$s">%3$s</time>
							<time class="updated" datetime="%4$s">%5$s</time>';
							
		}


		$time_string = sprintf(
			$time_string,
			$access_time,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		

		printf(
			'<div class="article-date">%1$s</div>',
			$time_string
		);
	}

endif;

// } end of the tdev_single_posted_on function
// beginning of tdev_featured_article_posted_on function {

if( ! function_exists( 'tdev_featured_article_posted_on' ) ):

	function tdev_featured_article_posted_on() {

		$access_time = 'access_time';


		$time_string = '<i class="material-icons">%1$s</i>
						<time class="published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

			$time_string = '<i class="material-icons">%1$s</i>
							<time class="published" datetime="%2$s">%3$s</time>
							<time class="updated" datetime="%4$s">%5$s</time>';
							
		}


		$time_string = sprintf(
			$time_string,
			$access_time,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		

		printf(
			'<div class="article-date">%1$s</div>',
			$time_string
		);
	}

endif;

// } ending of tdev_featured_article_posted_on function
// Beginning of tdev_post_thumbnail function{

if ( ! function_exists( 'tdev_post_thumbnail' ) ) :

	function tdev_post_thumbnail() {
		if ( ! tdev_can_show_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<figure class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</figure><!-- .post-thumbnail -->

			<?php
		else :
			?>

		<figure class="post-thumbnail">
			<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'post-thumbnail' ); ?>
			</a>
		</figure>

			<?php
		endif; // End is_singular().
	}

endif;

// } end of tdev_post_thumbnail
// begining tdev_comment_avatar function {

if ( ! function_exists( 'tdev_comment_avatar' ) ) :
	/**
	 * Returns the HTML markup to generate a user avatar.
	 */
	function tdev_get_user_avatar_markup( $id_or_email = null ) {

		if ( ! isset( $id_or_email ) ) {
			$id_or_email = get_current_user_id();
		}

		return sprintf( '<div class="comment-user-avatar comment-author vcard">%s</div>', get_avatar( $id_or_email, tdev_get_avatar_size() ) );
	}
endif;

if ( ! function_exists ( 'tdev_category_list' ) ) :
	
	function tdev_category_list(){

		$categories_list = get_the_category_list( __( ', ', 'tdev' ) );
			if ( $categories_list ) {
				/* 
				2: posted in label, only visible to screen readers.
				3: list of categories.
				*/
				if ( ! is_singular() ) {

				printf(
					'<div class="footer-posts-meta">
					<span class="screen-reader-text">%1$s</span>%2$s
					</div>',
					__( 'Posted in: ', 'tdev' ),
					$categories_list
				); // WPCS: XSS OK.
				}

				elseif ( is_singular() ) {
					printf(
						'<div class="footer-posts-meta">
						<span class="single-category">%1$s %2$s</span>
						</div>',
						__( 'Posted in: ', 'tdev' ),
						$categories_list
					); // WPCS: XSS OK.
				}
			}

	}	// end of function

endif;

if ( ! function_exists( 'tdev_comment_count' ) ) :
	/**
	 * Prints HTML with the comment count for the current post.
	 */
	function tdev_comment_count() {
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<div class="footer-posts-meta">';

			/* translators: %s: Name of current post. Only visible to screen readers. */
			comments_popup_link( sprintf( 
										__( 'Leave a comment<span class="screen-reader-text"> 
											on %s</span>', 'tdev' ),
											get_the_title() ), __('1'), __('%') );

			echo '</div>';
		}
	}	// end of function
endif;



if ( ! function_exists( 'tdev_the_posts_navigation' ) ) :
	/**
	 * Documentation for function.
	 */
	function tdev_the_posts_navigation() {

		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => sprintf( '<li class="pagination-previous">
										<i class="material-icons">arrow_back</i>%s</li>', 
										__( 'Previous', 'tdev' ) ),
				'next_text' => sprintf( '<li class="pagination-next" aria-label="Next page">%s
										<i class="material-icons">arrow_forward</i></li>', 
										__( 'Next', 'tdev' ) ),
			)
		);
	}
endif;

if ( ! function_exists( 'tdev_comment_form' ) ) :
	/**
	 * Documentation for function.
	 */
	function tdev_comment_form( $order ) {
		if ( true === $order || strtolower( $order ) === strtolower( get_option( 'comment_order', 'asc' ) ) ) {
		
		function comment_form_commentor_data_fields() {

			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$tdev_complete_fields = array(
				'author'		=> '<label>
									<input id="author" name="author" type="text"
									class="tdev-comment-author"
									placeholder="' . __( 'Name ', 'tdev' ) .
									( $req ? '*' : '' ) . '"
									' . ( $req ? $aria_req : '' ) . ' >
									</label>',
				'email' 		=>	'<label>
									<input id="email" name="email" type="text"
									class="tdev-comment-email"
									placeholder= "' . __( 'Email ', 'tdev' ) .
									( $req ? '*' : '' ) . '"
									' . ( $req ? $aria_req : '' ) . ' >
									</label>',
				'url' 			=> '<label>
									<input id="url" name="url" type="text" 
									class="tdev-comment-site"
									placeholder="' . __( 'Website', 'domainreference' ) . '"
									value="' . esc_attr( $commenter['comment_author_url'] ) . '"
									>
									</label>'
			);

			if( get_theme_mod('comment_form_website_url_hide') == true ){

				$tdev_complete_fields_remove_url = array_pop( $tdev_complete_fields );
				return $tdev_complete_fields;

			}else{

				return $tdev_complete_fields;

			}

		}

			comment_form(
				array(
					'logged_in_as' => null,
					'title_reply'  => null,
					'class_form'   => 'tdev-comment-form',
					'comment_field' =>  '<label>
										 <textarea id="comment" name="comment" placeholder="' . __( 'Comment', 'tdev' ) . '"
										 class="tdev-comment-field"
										 rows="6" aria-required="true"></textarea>
										 </label>',
					'fields'	   => comment_form_commentor_data_fields(),
					'class_submit'	=> 'button'
				)
			);
		}
	}
endif;

