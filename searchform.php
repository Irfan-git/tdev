
<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div class="tdev-search-form">
    <form role="search" method="get" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="<?php echo $unique_id; ?>">
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'tdev' ); ?></span>
            </label>
            <input type="search" id="<?php echo $unique_id; ?>" class="input-group-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'tdev' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <div class="input-group-button">
            <button type="submit" class="button search-button">
                <i class="material-icons">search</i>
                <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'tdev' ); ?></span>
            </button>
            </div>
    </form>
</div>