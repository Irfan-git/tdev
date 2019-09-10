<?php
get_header();

    get_template_part('template-parts/extras/blog-top-section');

?>

<div class="row sidebar-page-container">

<?php 

    $left_side = 'left_side';
    $right_side = 'right_side';
    $sidebar_position = get_theme_mod('sidebar_position');

    if( $sidebar_position == $left_side ):

        get_sidebar();
    
    endif;

?>
    <section class="columns large-9 medium-12 articles-container">
        <div class="row">            

        <?php get_template_part('template-parts/content/content'); ?>

        </div>
    </section>

<?php

    if( $sidebar_position == $right_side ):
        
        get_sidebar();
    
    endif;

?>

</div>

<?php get_footer(); ?>
