<?php
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
