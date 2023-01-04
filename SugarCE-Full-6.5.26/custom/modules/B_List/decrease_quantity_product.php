<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class quantity_product {
    public function decrease_quantity_product(&$bean, $event, $args){
        global $db;

        $product = BeanFactory::getBean('B_Product', $bean->b_product_id_c);

        if (isset($bean->fetched_row['list_product_quantity'])){
            if ($bean->temp == $bean->list_product_quantity)
            {
                return;
            }
            else{
                $value = abs($bean->list_product_quantity - $bean->temp);
                $amount = $product->product_quantity - $value;
                $where = $bean->b_product_id_c;
                $sqlUpdate = "UPDATE b_product set product_quantity = '" . $amount . "' where id = '" . $where . "'";
                $db->query($sqlUpdate);
                $bean->temp = $bean->list_product_quantity;
            }
        }
        else {
            $amount = $product->product_quantity - $bean->list_product_quantity;
            $where = $bean->b_product_id_c;

            $sqlUpdate = "UPDATE b_product set product_quantity = '" . $amount . "' where id = '" . $where . "'";
            $db->query($sqlUpdate);
            $bean->temp = $bean->list_product_quantity;
        }
    }
}

?>