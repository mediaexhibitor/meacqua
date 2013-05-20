<?php
/*
 * The template for displaying search forms in First Theme
 *
 */
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" />
        <input type="submit" class="submit btn btn-mid" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'shape' ); ?>" />
    </form>
