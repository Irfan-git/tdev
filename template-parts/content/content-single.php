
<?php

$single_post_classes = array( 'columns', 'large-12', 'small-12', 'single-article', 'image-thumbnail-filter' );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $single_post_classes ); ?> >

        <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>

        <div class="single-content">

        <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tdev' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="single-links">' . __( 'Pages:', 'tdev' ),
                    'after'  => '</div>',
                )
            );
        ?>
        
        </div>

        <footer class="article-footer-meta">
        <?php tdev_category_list(); ?>
        </footer>     
            
</article>



