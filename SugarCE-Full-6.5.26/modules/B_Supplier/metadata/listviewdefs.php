<?php
$module_name = 'B_Supplier';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SUPPLIER_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SUPPLIER_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_SUPPLIER_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'SUPPLIER_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'SUPPLIER_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
);
?>
