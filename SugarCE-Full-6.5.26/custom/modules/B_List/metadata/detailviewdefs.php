<?php
$module_name = 'B_List';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'name',
          1 => 
          array (
            'name' => 'list_product_quantity',
            'label' => 'LBL_LIST_PRODUCT_QUANTITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'list_product_price',
            'label' => 'LBL_LIST_PRODUCT_PRICE',
          ),
          1 => 
          array (
            'name' => 'list_product_total_price',
            'label' => 'LBL_LIST_PRODUCT_TOTAL_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'b_list_b_receipt_name',
            'label' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
