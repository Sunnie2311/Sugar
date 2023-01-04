<?php

$hook_version = 1;
//$hook_array['after_retrieve'][] = array();
$hook_array['before_save'][] = array(1, "decrease_quantity_product", 'custom/modules/B_List/decrease_quantity_product.php', 'quantity_product', 'decrease_quantity_product');
$hook_array['before_save'][] = array(1, "display_product_price", 'custom/modules/B_List/display_product_price.php', 'product_price', 'display_product_price');
$hook_array['after_delete'][] = array(1, "increase_quantity_product", 'custom/modules/B_List/increase_quantity_product.php', 'quantity_product', 'increase_quantity_product');




?>
