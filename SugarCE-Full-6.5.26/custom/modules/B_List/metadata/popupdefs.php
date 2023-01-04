<?php
$popupMeta = array (
    'moduleMain' => 'B_List',
    'varName' => 'B_List',
    'orderBy' => 'b_list.name',
    'whereClauses' => array (
  'name' => 'b_list.name',
),
    'searchInputs' => array (
  0 => 'b_list_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'LIST_PRODUCT_QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_QUANTITY',
    'width' => '10%',
    'default' => true,
    'name' => 'list_product_quantity',
  ),
  'LIST_PRODUCT_PRICE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_PRICE',
    'width' => '10%',
    'default' => true,
    'name' => 'list_product_price',
  ),
  'LIST_PRODUCT_TOTAL_PRICE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_TOTAL_PRICE',
    'width' => '10%',
    'default' => true,
    'name' => 'list_product_total_price',
  ),
  'B_LIST_B_RECEIPT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
    'id' => 'B_LIST_B_RECEIPTB_RECEIPT_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'b_list_b_receipt_name',
  ),
),
);
