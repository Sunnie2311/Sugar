<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class quantity_product {
    public function increase_quantity_product(&$bean, $event, $args){
        global $db;


        $product = BeanFactory::getBean('B_Product', $bean->b_product_id_c);

        $amount = $product->product_quantity + $bean->list_product_quantity;
        $where = $bean->b_product_id_c;

        $sqlUpdate = "UPDATE b_product set product_quantity = '" . $amount . "' where id = '" . $where . "'";
        $db->query($sqlUpdate);

    }
}

?>