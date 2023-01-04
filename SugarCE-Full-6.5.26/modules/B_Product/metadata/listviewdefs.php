<?php
$module_name = 'B_Product';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRODUCT_ID' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRODUCT_ID',
    'width' => '10%',
  ),
  'PRODUCT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_TYPE',
    'width' => '10%',
  ),
  'PRODUCT_QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PRODUCT_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'PRODUCT_PRICE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRODUCT_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'SUPPLIER_RELATE_PRODUCT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SUPPLIER_RELATE_PRODUCT',
    'id' => 'B_SUPPLIER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
?>
