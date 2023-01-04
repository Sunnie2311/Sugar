<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2022-12-15 02:28:41
$dictionary["B_List"]["fields"]["b_customer_b_list_1"] = array (
  'name' => 'b_customer_b_list_1',
  'type' => 'link',
  'relationship' => 'b_customer_b_list_1',
  'source' => 'non-db',
  'module' => 'B_Customer',
  'bean_name' => 'B_Customer',
  'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_CUSTOMER_TITLE',
  'id_name' => 'b_customer_b_list_1b_customer_ida',
);
$dictionary["B_List"]["fields"]["b_customer_b_list_1_name"] = array (
  'name' => 'b_customer_b_list_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_CUSTOMER_TITLE',
  'save' => true,
  'id_name' => 'b_customer_b_list_1b_customer_ida',
  'link' => 'b_customer_b_list_1',
  'table' => 'b_customer',
  'module' => 'B_Customer',
  'rname' => 'name',
);
$dictionary["B_List"]["fields"]["b_customer_b_list_1b_customer_ida"] = array (
  'name' => 'b_customer_b_list_1b_customer_ida',
  'type' => 'link',
  'relationship' => 'b_customer_b_list_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_LIST_TITLE',
);


// created: 2022-12-13 17:02:28
$dictionary["B_List"]["fields"]["b_list_b_product"] = array (
  'name' => 'b_list_b_product',
  'type' => 'link',
  'relationship' => 'b_list_b_product',
  'source' => 'non-db',
  'module' => 'B_Product',
  'bean_name' => 'B_Product',
  'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_PRODUCT_TITLE',
  'id_name' => 'b_list_b_productb_product_ida',
);
$dictionary["B_List"]["fields"]["b_list_b_product_name"] = array (
  'name' => 'b_list_b_product_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_PRODUCT_TITLE',
  'save' => true,
  'id_name' => 'b_list_b_productb_product_ida',
  'link' => 'b_list_b_product',
  'table' => 'b_product',
  'module' => 'B_Product',
  'rname' => 'name',
);
$dictionary["B_List"]["fields"]["b_list_b_productb_product_ida"] = array (
  'name' => 'b_list_b_productb_product_ida',
  'type' => 'link',
  'relationship' => 'b_list_b_product',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_LIST_TITLE',
);


// created: 2022-12-13 17:02:28
$dictionary["B_List"]["fields"]["b_list_b_receipt"] = array (
  'name' => 'b_list_b_receipt',
  'type' => 'link',
  'relationship' => 'b_list_b_receipt',
  'source' => 'non-db',
  'module' => 'B_Receipt',
  'bean_name' => 'B_Receipt',
  'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
  'id_name' => 'b_list_b_receiptb_receipt_ida',
);
$dictionary["B_List"]["fields"]["b_list_b_receipt_name"] = array (
  'name' => 'b_list_b_receipt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
  'save' => true,
  'id_name' => 'b_list_b_receiptb_receipt_ida',
  'link' => 'b_list_b_receipt',
  'table' => 'b_receipt',
  'module' => 'B_Receipt',
  'rname' => 'name',
);
$dictionary["B_List"]["fields"]["b_list_b_receiptb_receipt_ida"] = array (
  'name' => 'b_list_b_receiptb_receipt_ida',
  'type' => 'link',
  'relationship' => 'b_list_b_receipt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_LIST_TITLE',
);


 // created: 2022-12-15 02:31:48
$dictionary['B_List']['fields']['list_customer_name']['merge_filter']='disabled';

 

$dictionary['B_List']['fields']['list_product_total_price'] = array(
    'name' => 'list_product_total_price',
    'vname' => 'LBL_LIST_PRODUCT_TOTAL_PRICE',
    'type' => 'int',
    'len' => 255,
    'size' => 20,
);
$dictionary['B_List']['fields']['list_product_price'] = array(
    'name' => 'list_product_price',
    'vname' => 'LBL_LIST_PRODUCT_PRICE',
    'type' => 'int',
    'len' => 255,
    'size' => 20,
);
$dictionary['B_List']['fields']['list_customer_name'] = array(
    'name' => 'list_customer_name',
    'vname' => 'LBL_LIST_CUSTOMER_NAME',
    'type' => 'varchar',
    'len' => 255,
    'size' => 20,
);
$dictionary['B_List']['fields']['temp'] = array(
    'name' => 'temp',
    'vname' => 'LBL_TEMP',
    'type' => 'int',
    'len' => 255,
    'size' => 20,
);
?>