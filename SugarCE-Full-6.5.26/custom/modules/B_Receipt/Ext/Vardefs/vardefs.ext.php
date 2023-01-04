<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2022-12-15 12:43:06
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receipt"] = array (
  'name' => 'b_invoice_b_receipt',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'module' => 'B_Invoice',
  'bean_name' => false,
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
  'id_name' => 'b_invoice_b_receiptb_invoice_ida',
);
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receipt_name"] = array (
  'name' => 'b_invoice_b_receipt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
  'save' => true,
  'id_name' => 'b_invoice_b_receiptb_invoice_ida',
  'link' => 'b_invoice_b_receipt',
  'table' => 'b_invoice',
  'module' => 'B_Invoice',
  'rname' => 'name',
);
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receiptb_invoice_ida"] = array (
  'name' => 'b_invoice_b_receiptb_invoice_ida',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
);


// created: 2022-12-13 17:02:28
$dictionary["B_Receipt"]["fields"]["b_list_b_receipt"] = array (
  'name' => 'b_list_b_receipt',
  'type' => 'link',
  'relationship' => 'b_list_b_receipt',
  'source' => 'non-db',
  'module' => 'B_List',
  'bean_name' => 'B_List',
  'side' => 'right',
  'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_LIST_TITLE',
);


// created: 2022-12-13 17:02:28
$dictionary["B_Receipt"]["fields"]["b_receipt_b_customer"] = array (
  'name' => 'b_receipt_b_customer',
  'type' => 'link',
  'relationship' => 'b_receipt_b_customer',
  'source' => 'non-db',
  'module' => 'B_Customer',
  'bean_name' => 'B_Customer',
  'vname' => 'LBL_B_RECEIPT_B_CUSTOMER_FROM_B_CUSTOMER_TITLE',
  'id_name' => 'b_receipt_b_customerb_customer_ida',
);
$dictionary["B_Receipt"]["fields"]["b_receipt_b_customer_name"] = array (
  'name' => 'b_receipt_b_customer_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_RECEIPT_B_CUSTOMER_FROM_B_CUSTOMER_TITLE',
  'save' => true,
  'id_name' => 'b_receipt_b_customerb_customer_ida',
  'link' => 'b_receipt_b_customer',
  'table' => 'b_customer',
  'module' => 'B_Customer',
  'rname' => 'name',
);
$dictionary["B_Receipt"]["fields"]["b_receipt_b_customerb_customer_ida"] = array (
  'name' => 'b_receipt_b_customerb_customer_ida',
  'type' => 'link',
  'relationship' => 'b_receipt_b_customer',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B_RECEIPT_B_CUSTOMER_FROM_B_RECEIPT_TITLE',
);


 // created: 2022-12-15 00:45:28
$dictionary['B_Receipt']['fields']['receipt_address']['comments']='Leave empty if you want default address';

 


$dictionary['B_Receipt']['fields']['receipt_original_price'] = array(
        'required' => false,
        'name' => 'receipt_original_price',
        'vname' => 'LBL_RECEIPT_ORIGINAL_PRICE',
        'type' => 'int',
        'default' => '0',
        'no_default' => false,
        'len' => '255',
        'size' => '20',
);

$dictionary['B_Receipt']['fields']['receipt_discount_price_percent'] = array(
    'required' => false,
    'name' => 'receipt_discount_price_percent',
    'vname' => 'LBL_RECEIPT_DISCOUNT_PRICE_PERCENT',
    'type' => 'int',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);

$dictionary['B_Receipt']['fields']['receipt_discount_price_immediacy'] = array(
    'required' => false,
    'name' => 'receipt_discount_price_immediacy',
    'vname' => 'LBL_RECEIPT_DISCOUNT_PRICE_IMMEDIACY',
    'type' => 'int',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);

$dictionary['B_Receipt']['fields']['receipt_detail'] = array(
    'required' => false,
    'name' => 'receipt_detail',
    'vname' => 'LBL_RECEIPT_DETAIL',
    'type' => 'varchar',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);
$dictionary['B_Receipt']['fields']['receipt_product_name'] = array(
    'required' => false,
    'name' => 'receipt_product_name',
    'vname' => 'LBL_RECEIPT_PRODUCT_NAME',
    'type' => 'varchar',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);
$dictionary['B_Receipt']['fields']['receipt_unit_price'] = array(
    'required' => false,
    'name' => 'receipt_unit_price',
    'vname' => 'LBL_RECEIPT_UNIT_PRICE',
    'type' => 'varchar',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);
$dictionary['B_Receipt']['fields']['receipt_product_quantity'] = array(
    'required' => false,
    'name' => 'receipt_product_quantity',
    'vname' => 'LBL_RECEIPT_PRODUCT_QUANTITY',
    'type' => 'varchar',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);
$dictionary['B_Receipt']['fields']['receipt_product_total'] = array(
    'required' => false,
    'name' => 'receipt_product_total',
    'vname' => 'LBL_RECEIPT_PRODUCT_TOTAL',
    'type' => 'varchar',
    'default' => '0',
    'no_default' => false,
    'len' => '255',
    'size' => '20',
);


?>