

<?php 
    
    get_header(); 

    if ( have_posts() ) : 
    
?>

<div class="row sidebar-page-container">


<?php 

    $left_side = 'left_side';
    $sidebar_position = get_theme_mod('sidebar_position');

    if( $sidebar_position == $left_side ):

        get_sidebar();
    
    endif;

?>
    <section class="columns large-9 medium-9 small-12 articles-container">

    <header class="page-header">
            <h1 class="page-title">
                <?php _e( 'Search results for:', 'tdev' ); ?>
                <div class="page-description"><?php echo get_search_query(); ?></div>
            </h1>
        </header><!-- .page-header -->

	<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

	
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
            endwhile;
?>

</section>  <!-- articles-container -->

<?php
            
        $right_side = 'right_side';
        $sidebar_position = get_theme_mod('sidebar_position');

        if( $sidebar_position == $right_side ):
                
                get_sidebar();

        endif;

        ?>

        <?php
			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</div>  <!-- sidebar-page-container -->

<?php
get_footer();

