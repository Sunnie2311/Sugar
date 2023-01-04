<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class display {
    public function display_invoice(&$bean, $event, $args)
    {
        global $db;

        $sqlSelect = "select pro.name, pro.product_price, list.list_product_quantity 
			from b_list_b_receipt_c, b_list list, b_product pro, b_receipt receipt
            where b_list_b_receipt_c.b_list_b_receiptb_list_idb = list.id
            and b_list_b_receipt_c.b_list_b_receiptb_receipt_ida = receipt.id
            and list.b_product_id_c = pro.id
            and list.deleted = 0
            and receipt.id = '" . $bean->id . "'";
        $sql = $db->query($sqlSelect);

        $name_list = array();
        $price_list = array();
        $quantity_list = array();

        while($row = $db->fetchByAssoc($sql))
        {
            $name_list[] = $row["name"];
            $quantity_list[] = $row["list_product_quantity"];
            $price_list[] = $row["product_price"];
        }

        $total = 0;
        for ($i = 0; $i < count($quantity_list); $i++)
        {
            $total += $price_list[$i] * $quantity_list[$i];
        }

        $name = "";
        for ($i = 0; $i < count($name_list); $i++)
        {
            $name .= $name_list[$i];
            $name .= ":";
        }
        $price = "";
        for ($i = 0; $i < count($price_list); $i++)
        {
            $price .= $price_list[$i];
            $price .= ":";
        }
        $quantity = "";
        for ($i = 0; $i < count($quantity_list); $i++)
        {
            $quantity .= $quantity_list[$i];
            $quantity .= ":";
        }
        $unit_total = array();
        for ($i = 0; $i < count($quantity_list); $i++)
        {
            $unit_total[] = $price_list[$i] * $quantity_list[$i];
        }
        $total_unit = "";
        for ($i = 0; $i < count($quantity_list); $i++)
        {
            $total_unit .= $unit_total[$i];
            $total_unit .= ":";
        }
        $bean->receipt_product_name = $name;
        $bean->receipt_unit_price = $price;
        $bean->receipt_product_quantity = $quantity;
        $bean->receipt_product_total = $total_unit;
        $bean->receipt_original_price = $total;


    }
}

?>