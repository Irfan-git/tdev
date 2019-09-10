<?php

if (!is_paged()){
    
        $sticky = get_option( 'sticky_posts' );
      
        $blog_top_option_choose = get_theme_mod( 'blog_top_option_choose' );

        if( $blog_top_option_choose == 'onepost' ):

            require get_template_directory(). '/template-parts/extras/one-featured-post.php';

        endif;

        if( $blog_top_option_choose == 'twopost' ):

            require get_template_directory(). '/template-parts/extras/two-featured-post.php';

        endif;

    
        }
 
 ?>
