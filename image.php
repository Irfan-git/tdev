<?php
/**
 * The template for displaying image attachments
 *
 * @subpackage tdev
 */

get_header();
?>


<div class="row sidebar-page-container">
    <section class="columns large-8 medium-8 small-12 articles-container">
        <div class="row">

			<?php
				// Start the loop.
				while ( have_posts() ) :
					the_post();
			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="single-content">

						<figure class="entry-attachment wp-block-image">
							<?php
								/**
								 * Filter the default tdev image attachment size.
								 *
								 * @since Twenty Sixteen 1.0
								 *
								 * @param string $image_size Image size. Default 'large'.
								 */
								$image_size = apply_filters( 'tdev_attachment_size', 'full' );

								echo wp_get_attachment_image( get_the_ID(), $image_size );
							?>

							<figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>

						</figure><!-- .entry-attachment -->

						<?php
							the_content();
							wp_link_pages(
								array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tdev' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tdev' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								)
							);
						?>
					</div><!-- / single-content -->

					<footer class="entry-footer article-footer-meta">
						<?php
							// Retrieve attachment metadata.
							$metadata = wp_get_attachment_metadata();
							if ( $metadata ) {
								printf(
									'<span class="full-size-image-link"><span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s &times; %4$s</a></span>',
									_x( 'Full size', 'Used before full size attachment link.', 'tdev' ),
									esc_url( wp_get_attachment_url() ),
									absint( $metadata['width'] ),
									absint( $metadata['height'] )
								);
							}
						?>


					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				<div class="row">
					<div class="columns large-12">
						<div class="single-navigation single-image-navigation">

				

				<?php
					// Parent post navigation.
					the_post_navigation(
						array(
							'prev_text' => _x( '<i class="material-icons">remove</i>
											<span class="meta-nav" aria-hidden="true">Previous Post
											</span> <span class="screen-reader-text">
											Previous post: </span><br/>
											<span class="post-title">%title</span>',
											'Parent post link', 'tdev' ),
						)
					);
				?>

						</div>	<!-- /	single-navigation -->
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				// End the loop.
				endwhile;
			?>
				</div>	<!-- /	large-12 -->
			</div>	<!-- /   row -->

		</div>	<!-- /   row -->

</section>      <!-- /   articles-container -->

            <?php get_sidebar(); ?>

    </div>      <!-- /   sidebar-page-container -->

<?php
get_footer();
