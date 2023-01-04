<?php
// created: 2022-12-14 11:07:09
$subpanel_layout['list_fields'] = array (
  'list_product' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_LIST_PRODUCT',
    'id' => 'B_PRODUCT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'B_Product',
    'target_record_key' => 'b_product_id_c',
  ),
  'list_product_quantity' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_LIST_PRODUCT_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
);