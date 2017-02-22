<?php
/**
 * Remover o copyright do Storefront e adicionar um novo
 */

add_action('init', 'custom_remove_footer_credit', 10);

function custom_remove_footer_credit () {
     remove_action ( 'storefront_footer', 'storefront_credit', 20 );
     add_action ( 'storefront_footer', 'custom_storefront_credit', 20);

}

function custom_storefront_credit() { 
      ?>
      <div class="site-info">
        &copy; Nomedositeaqui <?php echo get_the_date('Y'); ?>
      </div><!-- .site-info -->

      <?php
}

?>