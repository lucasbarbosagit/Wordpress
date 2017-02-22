<?php

/**
 * Adds metaslider into the storefront_before_content action in the parent themes header.php file.
 */
function wpshock_storefront_homepage_slider() {
 
    // if not the StoreFront Homepage Page Template return false
    if (! is_page(49)) {
 
        return false;
 
    }
 
    // Output the metaSlider Shortcode via the do_shortcode() function.
    echo do_shortcode( '[metaslider id=69]' );

}
add_action( 'storefront_before_content', 'wpshock_storefront_homepage_slider', 5 );

?>