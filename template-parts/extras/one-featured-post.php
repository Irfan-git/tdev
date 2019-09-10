
    <div class="row expanded top-blog-area-wrapper">
    
        <div class="columns large-9 small-12">
        
            <div class="row top-one-post-featured-article-wrapper">

<?php
        $args = array(
            'post__in'              => $sticky,
            'posts_per_page'        => 1,
            'ignore_sticky_posts'   => 1
        );
?>


<?php
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : 
                $query->the_post();

?>

       <!-- 1 featured post option -->
        

                <div class="columns large-8 small-12 top-featured-one-post-article-image">
                    <?php tdev_post_thumbnail(); ?>
                </div>  <!-- / large-8 -->

                <div class="columns large-4 small-12 top-featured-one-post-article-meta">
                        <?php 
                        the_title( sprintf( '<h2 class="top-featured-one-post-article-title"><a href="%s" rel="bookmark">',
                                                esc_url( get_permalink() ) ),'</a></h2>' );
                        
                        ?>
                </div>  <!-- / large-4 -->


        <!-- / 1 featured post option -->
<?php
            endwhile;
        endif;

        wp_reset_postdata();

?>
                </div>  <!-- / row -->
            </div>  <!-- / large-9 -->

            <div class="columns large-3 small-12 top-blog-sidebar-area-wrapper">
            <?php    
            if ( is_active_sidebar( 'top-blog-sidebar' ) ) : 
            
                dynamic_sidebar( 'top-blog-sidebar' ); 
                
                endif; 
            ?>
            </div>  <!-- / top-blog-sidebar-area-wrapper -->

        </div>  <!-- / top-blog-area-wrapper -->
