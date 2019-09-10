
<?php
$article_classes = array( 'columns', 'large-12', 'small-12' );
?>
<article <?php post_class( $article_classes ); ?>>
        <?php
        $featured_article_classes = 'featured-post' ;

        if ( is_sticky() && is_home() && ! is_paged() ) {
        ?>
                <div class="<?php echo $featured_article_classes ?>" >
        <?php
            }
        ?>
            <div class="sidebar-page-article">
                <header class="articles-header">

        <?php
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	            </header><!-- / articles-header -->

	                    <?php tdev_post_thumbnail(); ?>

            <div class="articles-excerpt-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->

            <footer class="article-footer">
                <?php tdev_category_list(); ?>
            </footer><!-- /  entry-footer -->
        </div>  <!--  / sidebar-page-article -->

        <?php
        if ( is_sticky() && is_home() && ! is_paged() ) {
        ?>
                </div>  <!-- $featured_article_classes = 'featured-post' -->
        <?php
        }
        ?>

        </article><!-- #post-${ID} -->

        <div class="pagination-container" aria-label="Pagination">
                    <div class="text-center">
        <?php
            tdev_the_posts_navigation();
        ?>
                </div>  <!-- text-center -->
        </div>  <!-- / pagination -->