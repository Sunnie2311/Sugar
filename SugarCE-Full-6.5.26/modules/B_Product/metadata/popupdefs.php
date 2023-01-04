<?php
$popupMeta = array (
    'moduleMain' => 'B_Product',
    'varName' => 'B_Product',
    'orderBy' => 'b_product.name',
    'whereClauses' => array (
  'name' => 'b_product.name',
),
    'searchInputs' => array (
  0 => 'b_product_number',
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
),
);
