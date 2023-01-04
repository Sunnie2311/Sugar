<?php
$module_name = 'B_Supplier';
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
      'syncDetailEditViews' => true,
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
            'name' => 'supplier_id',
            'label' => 'LBL_SUPPLIER_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'supplier_phone',
            'label' => 'LBL_SUPPLIER_PHONE',
          ),
          1 => 
          array (
            'name' => 'supplier_email',
            'label' => 'LBL_SUPPLIER_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'supplier_address',
            'label' => 'LBL_SUPPLIER_ADDRESS',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>