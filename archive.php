<?php

get_header();

?>

<header class="archive-page-header">
				<?php
					the_archive_title( '<h1 class="archive-page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
<div class="row sidebar-page-container">


<?php 

    $left_side = 'left_side';
    $right_side = 'right_side';
    $sidebar_position = get_theme_mod('sidebar_position');

    if( $sidebar_position == $left_side ):

        get_sidebar();
    
    endif;

?>
    <section class="columns large-9 medium-9 small-12 articles-container">

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'excerpt' );

			// End the loop.
		endwhile;

	
		else :

			get_template_part( 'template-parts/content/content', 'none' );
		endif;
		?>
        
    </section>  <!-- articles-container -->
<?php

			if( $sidebar_position == $right_side ):
					
					get_sidebar();

			endif;

?>

	</div>  <!-- sidebar-page-container -->

<?php
get_footer();
