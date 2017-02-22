<?php

// adiciona os action que vc quer deixar na home, você escolhe qual quer deixar //e em qual posição.

    add_action( 'storefront_page', 'storefront_recent_products', 20 );
    add_action( 'storefront_page','storefront_product_categories', 60 );
    
?>    