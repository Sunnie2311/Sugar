<?php
// created: 2022-12-13 23:28:52
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'product_id' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRODUCT_ID',
    'width' => '10%',
  ),
  'product_quantity' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_PRODUCT_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'product_price' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_PRODUCT_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'product_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_TYPE',
    'width' => '10%',
  ),
);