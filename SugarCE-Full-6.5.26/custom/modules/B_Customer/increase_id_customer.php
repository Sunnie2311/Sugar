<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class id_customer {
    public function increase_id_customer(&$bean, $event, $args)
    {
        global $db;
        if (!isset($bean->fetched_row['customer_id'])) {
            $sqlSelect = "select max(customer_id) from b_customer";
            $row = $db->getOne($sqlSelect);

            $new_id = substr($row, -4);

            ++$new_id;
            $str = 'CTM';

            $final = $str . str_pad($new_id, 4, 0, STR_PAD_LEFT);

            $bean->customer_id = $final;
        }



    }

}

?>