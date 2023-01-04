<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class id_product {
    public function increase_id_product(&$bean, $event, $args)
    {
        global $db;
        if (!isset($bean->fetched_row['product_id'])) {
            $sqlSelect = "select max(product_id) from b_product";
            $row = $db->getOne($sqlSelect);

            $new_id = substr($row, -4);

            ++$new_id;
            $str = 'SKU';

            $final = $str . str_pad($new_id, 4, 0, STR_PAD_LEFT);

            $bean->product_id = $final;
        }



    }

}

?>