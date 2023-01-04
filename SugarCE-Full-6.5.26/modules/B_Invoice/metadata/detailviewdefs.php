<?php
$module_name = 'B_Invoice';
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
            'name' => 'invoice_customer',
            'label' => 'LBL_INVOICE_CUSTOMER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'invoice_receipt',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE_RECEIPT',
          ),
          1 => 'date_entered',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'invoice_original_price',
            'label' => 'LBL_INVOICE_ORIGINAL_PRICE',
          ),
          1 => 
          array (
            'name' => 'invoice_discount_price',
            'label' => 'LBL_INVOICE_DISCOUNT_PRICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'invoice_total_price',
            'label' => 'LBL_INVOICE_TOTAL_PRICE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
