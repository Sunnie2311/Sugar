<?php
$module_name = 'B_Product';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'product_type',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'product_quantity',
            'label' => 'LBL_PRODUCT_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'product_price',
            'label' => 'LBL_PRODUCT_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'supplier_relate_product',
            'studio' => 'visible',
            'label' => 'LBL_SUPPLIER_RELATE_PRODUCT',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>
