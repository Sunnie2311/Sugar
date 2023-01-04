<?php
$module_name = 'B_Receipt';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
);
?>
