<?php
$module_name = 'B_List';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'list_product',
            'studio' => 'visible',
            'label' => 'LBL_LIST_PRODUCT',
          ),
          1 => 
          array (
            'name' => 'list_product_quantity',
            'label' => 'LBL_LIST_PRODUCT_QUANTITY',
          ),
        ),
      ),
    ),
  ),
);
?>
