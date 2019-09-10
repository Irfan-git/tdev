<div class="row expanded top-blog-area-wrapper">
    
    <div class="columns large-9 small-12">
    
        <div class="row">
<?php

        $args = array(
            'post__in'       => $sticky,
            'posts_per_page' => 2,
            'ignore_sticky_posts' => 1
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : 
                $query->the_post();

?>

        <!-- 2 featured posts option -->

        <div class="columns large-6 small-12 image-thumbnail-filter top-featured-article-wrapper">
    
            <div class="top-featured-article-main-meta">

                <?php tdev_post_thumbnail(); ?>

                <div class="row top-featured-article-meta">
                    
                    <div class="column align-self-bottom">

                <?php 
                the_title( sprintf( '<h2 class="top-featured-article-title"><a href="%s" rel="bookmark">',
                                        esc_url( get_permalink() ) ),'</a></h2>' );
                ?>
                
                        <div class="featured-article-meta-extra">
                            <?php   tdev_posted_on(); ?>
                            <?php   tdev_comment_count();   ?>
                        </div>

                    </div>  <!-- / column align-self-bottom -->

                </div>  <!-- / top-featured-article-meta row -->

            </div>  <!-- / top-featured-article-main-meta -->

        </div>  <!-- / top-featured-article-wrapper -->

        <!-- / 2 featured posts option -->

        <?php
                endwhile;
            endif;
        wp_reset_postdata();

        ?>

        </div>  <!-- / row -->
               
    </div>  <!-- / columns large-9 -->

    <div class="columns large-3 small-12 top-blog-sidebar-area-wrapper">
            <?php    
            if ( is_active_sidebar( 'top-blog-sidebar' ) ) : 
            
                dynamic_sidebar( 'top-blog-sidebar' ); 
                
                endif; 
            ?>
        </div>  <!-- / top-blog-sidebar-area-wrapper -->

    </div>  <!-- / top-blog-area-wrapper -->