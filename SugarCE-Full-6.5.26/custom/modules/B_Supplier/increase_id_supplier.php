<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class id_supplier {
    public function increase_id_supplier(&$bean, $event, $args)
    {
        global $db;
        if (!isset($bean->fetched_row['supplier_id'])) {
            $sqlSelect = "select max(supplier_id) from b_supplier";
            $row = $db->getOne($sqlSelect);

            $new_id = substr($row, -4);

            ++$new_id;
            $str = 'SLR';

            $final = $str . str_pad($new_id, 4, 0, STR_PAD_LEFT);

            $bean->supplier_id = $final;
        }




    }

}

?>