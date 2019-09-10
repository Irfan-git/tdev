<?php
get_header();
?>

<div class="row">


<?php 

    $left_side = 'left_side';
    $right_side = 'right_side';
    $sidebar_position = get_theme_mod('sidebar_position');

    if( $sidebar_position == $left_side ):

        get_sidebar();
    
    endif;

?>

<section class="columns large-9 medium-12 articles-container">
<div class="row default-single-page-container">

<div aria-label="Breadcrumb">
    <?php tdev_the_breadcrumb(); ?>
</div>

<?php

if ( have_posts() ):
    while( have_posts() ):
        the_post();

    get_template_part('template-parts/content/content-single'); 
    
?>

<div class="columns large-12">

<?php

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
?>

    <div class="single-navigation">

    <?php
            if ( is_singular( 'attachment' ) ) {
                // Parent post navigation.
                the_post_navigation(
                    array(
                        /* translators: %s: parent post link */
                        'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span>
                        <span class="post-title">%s</span>', 'tdev' ), '%title' ),
                    )
                );
            } elseif ( is_singular( 'post' ) ) {
                // Previous/next post navigation.
                the_post_navigation(
                    array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' .
                                        __( 'Next Post', 'tdev' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . 
                                        __( 'Next post:', 'tdev' ) . '</span>
                                        <i class="material-icons">remove</i> <br/>' .
                                        '<span class="post-title">%title</span>',
                        'prev_text' => '<i class="material-icons">remove</i>
                                        <span class="meta-nav" aria-hidden="true">' .
                                        __( 'Previous Post', 'tdev' ) . '</span> ' .
                                        '<span class="screen-reader-text">' .
                                        __( 'Previous post:', 'tdev' ) . '</span>
                                        <br/>' . '<span class="post-title">%title</span>',
                    )
                );
            }

    ?>
            
    </div>  <!-- / single-navigation -->
            

</div>  <!-- / columns large-12 -->
<?php

    endwhile;
endif;                
?>

</div>      <!-- /   row -->

</section>      <!-- /   articles-container -->


<?php 
    if( $sidebar_position == $right_side ):

        get_sidebar();
    
    endif;
?>

</div>      <!-- /   sidebar-page-container -->

<?php get_footer(); ?>
