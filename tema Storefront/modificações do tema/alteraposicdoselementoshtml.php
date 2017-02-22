<?php


// altera a ordenação dos elementos html, pode ser qualquer elemento, no exemplo alterei o carrinho e o search de posição

add_action( 'init', 'jk_remove_storefront_cart' );
function jk_remove_storefront_cart() {
add_action( 'storefront_header', 'storefront_header_cart', 35 );
remove_action( 'storefront_header', 'storefront_header_cart', 60 );
}

add_action( 'init', 'jk_remove_storefront_header_search' );
function jk_remove_storefront_header_search() {
add_action( 'storefront_header', 'storefront_product_search', 20 );
remove_action( 'storefront_header', 'storefront_product_search', 40 );
}


?>