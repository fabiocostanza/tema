<?php
$show_sale = HubitatOptions::get( 'woocommerce_product_sale_tag', true );
if ($show_sale) {
    woocommerce_show_product_loop_sale_flash();
}
?>
