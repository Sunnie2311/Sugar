<?php
$popupMeta = array (
    'moduleMain' => 'B_Receipt',
    'varName' => 'B_Receipt',
    'orderBy' => 'b_receipt.name',
    'whereClauses' => array (
  'name' => 'b_receipt.name',
),
    'searchInputs' => array (
  0 => 'b_receipt_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'RECEIPT_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RECEIPT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_RELATE_RECEIPT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER_RELATE_RECEIPT',
    'id' => 'B_CUSTOMER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'RECEIPT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RECEIPT_STATUS',
    'width' => '10%',
  ),
),
);
