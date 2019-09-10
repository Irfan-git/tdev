
<?php if ( is_dynamic_sidebar() ) : ?>
<aside class="columns large-3 hide-for-medium-only hide-for-small-only" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'tdev' ); ?>">

    <?php 
        if ( is_active_sidebar( 'sidebar-top' ) ) : 
        
        dynamic_sidebar( 'sidebar-top' ); 
        
        endif; 

        if ( is_active_sidebar( 'sticky-sidebar-bottom' ) ) : 
        
        dynamic_sidebar( 'sticky-sidebar-bottom' ); 
        
        endif; 
    ?>

</aside>

<?php endif; ?>