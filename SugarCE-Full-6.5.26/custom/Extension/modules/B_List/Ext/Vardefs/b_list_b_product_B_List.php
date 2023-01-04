<?php
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
