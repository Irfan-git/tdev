    <?php
		if ( have_posts() ):
            while( have_posts() ):
                the_post();

            $article_classes = array( 'columns', 'large-12', 'small-12' );

    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( $article_classes ); ?>>

    <?php
               
            $blog_top_option_choose = get_theme_mod( 'blog_top_option_choose' );

    if ( $blog_top_option_choose == 'disable' ) {
            
            $featured_article_classes = 'featured-post' ;

            if ( is_sticky() && is_home() && ! is_paged() ) {
                ?>
            <div class="<?php echo $featured_article_classes ?>" >
            <?php
            }

    }
            
            ?>

            <div class="sidebar-page-article">
                <header class="articles-header">

                <?php
                tdev_posted_on();

                if ( is_singular() ) :
                    the_title( '<h1>', '</h1>' );
                else :
                    the_title( sprintf( '<h2><a href="%s" rel="bookmark">',
                                        esc_url( get_permalink() ) ),
                                        '</a></h2>' );
                endif;

                    ?>
                </header>   <!-- articles-header -->
                    <?php   tdev_post_thumbnail();    ?>
                <footer class="article-footer">
                <?php
                tdev_category_list();           
                tdev_comment_count();
                ?>
                </footer>
            </div>  <!-- sidebar-page-article -->
            <?php

    if ( $blog_top_option_choose == 'disable' ) {

            if ( is_sticky() && is_home() && ! is_paged() ) {
            ?>
            </div>  <!-- $featured_article_classes = 'featured-post' -->
            <?php
            }

    }
    
            ?>
            </article>
            <?php
           
            endwhile;  // while( have_posts() )
        endif; // if( have_posts() )
    ?>

        <div class="pagination-container" aria-label="Pagination">
                <div class="text-center">
    <?php
        tdev_the_posts_navigation();
    ?>
                </div>  <!-- text-center -->
        </div>  <!-- / pagination -->
