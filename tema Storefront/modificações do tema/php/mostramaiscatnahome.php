<?php

/**
 * Alters the output of the homepage product categories on the Storefront theme --- mostrando mais categorias na home
 * Affects the storefront_product_categories_args filter in /inc/structure/template-tags.php
 */

function sd_display_all_home_product_categories( $args ) {

	// Sets the maximum product categories to 50, you can increase this to display more if need be.
	$args['limit'] = 50;
	
	// Displays the child categories in the output as by default only parent categories display.
	$args['child_categories'] = '';

	// Output
	return $args;

}
add_filter( 'storefront_product_categories_args', 'sd_display_all_home_product_categories' );

?>