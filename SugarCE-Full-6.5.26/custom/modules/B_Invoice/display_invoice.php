<?php
//
//if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//
//class display {
//    public function display_invoice(&$bean, $event, $args)
//    {
//        global $db;
//
//        $sqlSelect = "select pro.name, pro.product_price, list.list_product_quantity
//			from b_invoice invoice, b_list_b_receipt_c, b_list list, b_product pro
//			where invoice.b_receipt_id_c = b_list_b_receipt_c.b_list_b_receiptb_receipt_ida
//			and b_list_b_receipt_c.b_list_b_receiptb_list_idb = list.id
//			and list.b_product_id_c = pro.id
//			and list.deleted = 0
//			and invoice.id = '" . $bean->id . "'";
//        $sql = $db->query($sqlSelect);
//
//        $name123_list = array();
//        $price_list = array();
//        $quantity_list = array();
//
//        while($row = $db->fetchByAssoc($sql))
//        {
//            $name123_list[] = $row["name"];
//            $quantity_list[] = $row["list_product_quantity"];
//            $price_list[] = $row["product_price"];
//        }
//
//        $price = 0;
//        for ($i = 0; $i < count($quantity_list); $i++)
//        {
//            $price += $price_list[$i] * $quantity_list[$i];
//        }
//        $sqlSelect_name = "select customer.name from b_customer customer, b_invoice inv, b_receipt rec where inv.b_receipt_id_c = rec.id and rec.b_customer_id_c = customer.id and inv.id = '" . $bean->id . "'";
//
//        $sql2 = $db->getOne($sqlSelect_name);
//
//        $customer_name = $sql2;
//
//        $bean->invoice_customer = $customer_name;
//        $abc = array();
//    }
//}
//
//?>