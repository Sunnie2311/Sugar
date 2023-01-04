<?php
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
