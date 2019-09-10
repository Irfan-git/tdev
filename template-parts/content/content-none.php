
<div class="row others-page-gap">
<?php
$article_classes = array( 'columns', 'large-12', 'small-12', "no-results", "not-found" );
?>
<article <?php post_class( $article_classes ); ?>>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tdev' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<?php

			if ( is_active_sidebar( 'no-content-page-top' ) ) : 
                    
			dynamic_sidebar( 'no-content-page-top' ); 
			
			endif; 

			if ( is_active_sidebar( 'no-content-page-bottom' ) ) : 
                    
			dynamic_sidebar( 'no-content-page-bottom' ); 
			
			endif; 

		else :
			
				if ( is_active_sidebar( 'no-content-page-top' ) ) : 
                    
				dynamic_sidebar( 'no-content-page-top' ); 
				
				endif; 
	
				if ( is_active_sidebar( 'no-content-page-bottom' ) ) : 
						
				dynamic_sidebar( 'no-content-page-bottom' ); 
				
				endif; 
			
			endif; 

		?>
	</div><!-- .page-content -->
</article>

</div>