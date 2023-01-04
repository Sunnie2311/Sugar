<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class product_price {
    public function display_product_price(&$bean, $event, $args){
        global $db;


        $product = BeanFactory::getBean('B_Product', $bean->b_product_id_c);

//        $price = (int)$row_product_price * (int)$row_quantity;
        $single = $product->product_price;
        $price = (int)$product->product_price * (int)$bean->list_product_quantity;

        $bean->list_product_total_price = $price;
        $bean->list_product_price = $single;
        $bean->name = $product->name;


    }
}

?>
