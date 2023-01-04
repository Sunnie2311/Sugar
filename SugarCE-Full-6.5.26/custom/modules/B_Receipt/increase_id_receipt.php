<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class id_receipt {
    public function increase_id_receipt(&$bean, $event, $args)
    {
        global $db;
        if (!isset($bean->fetched_row['receipt_id'])) {
            $sqlSelect = "select max(receipt_id) from b_receipt";
            $row = $db->getOne($sqlSelect);

            $new_id = substr($row, -4);

            ++$new_id;
            $str = 'RCT';

            $final = $str . str_pad($new_id, 4, 0, STR_PAD_LEFT);

            $bean->receipt_id = $final;
        }



    }

}

?>