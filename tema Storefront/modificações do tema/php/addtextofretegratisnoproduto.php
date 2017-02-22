<?php

// adicionando codigo p frete gratis p piracicaba dpois do titulo do prod.


remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'woocommerce_my_single_title',5);

if ( ! function_exists( 'woocommerce_my_single_title' ) ) {
   function woocommerce_my_single_title() {
?>
            <h1 itemprop="name" class="product_title entry-title"><span><?php the_title(); ?></span></h1><p>Frete grátis para Piracicaba<sup>*</sup></p>
<?php
    }
}

?>