<?php

// altera o titulo do menu para mobile

add_filter( 'storefront_menu_toggle_text', 'jk_storefront_menu_toggle_text' );
function jk_storefront_menu_toggle_text( $text ) {
 $text = __( 'Menu' );
	return $text;
}

?>