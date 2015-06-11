<?php
/*
 * additions.php - this file contains all the extra functions added to the
 *                 core Bones functionality - it will also be a handy place
 *                 to drop theme-specific functions.
 *
 * Author: Pete Favelle, pete@fsquared.co.uk
 */

/* Small function to add the itemprop attribute to menu elements. */
function f2bones_filter_menu_atts( $atts, $item, $args ) {
    $atts['itemprop'] = 'url';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'f2bones_filter_menu_atts', 10, 3 );

?>
