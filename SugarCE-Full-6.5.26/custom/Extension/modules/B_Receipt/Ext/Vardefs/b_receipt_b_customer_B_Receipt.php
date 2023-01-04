<?php
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
