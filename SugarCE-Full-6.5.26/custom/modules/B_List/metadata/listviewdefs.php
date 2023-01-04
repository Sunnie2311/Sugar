<?php
$module_name = 'B_List';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LIST_PRODUCT_QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'LIST_PRODUCT_PRICE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'LIST_PRODUCT_TOTAL_PRICE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_PRODUCT_TOTAL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'B_LIST_B_RECEIPT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
    'id' => 'B_LIST_B_RECEIPTB_RECEIPT_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
