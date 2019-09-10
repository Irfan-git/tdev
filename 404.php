<?php
get_header();
?>

<div class="row others-page-gap">
    <?php
    $article_classes = array( 'columns', 'large-12', 'small-12', "no-results", "not-found" );
    ?>
        <article <?php post_class( $article_classes ); ?>>

            <div class="page-content">

                    <?php 
			    if ( is_active_sidebar( 'no-content-page-top' ) ) : 
                    
                dynamic_sidebar( 'no-content-page-top' ); 
                
                endif; 
    
                if ( is_active_sidebar( 'no-content-page-bottom' ) ) : 
                        
                dynamic_sidebar( 'no-content-page-bottom' ); 
                
                endif; 
                    ?>

            </div><!-- .page-content -->
            
        </article>

</div>

<?php
get_footer();
