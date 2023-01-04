<?php
$module_name = 'B_Customer';
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
            'name' => 'customer_phone',
            'label' => 'LBL_CUSTOMER_PHONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer_email',
            'label' => 'LBL_CUSTOMER_EMAIL',
          ),
          1 => 
          array (
            'name' => 'customer_birth',
            'label' => 'LBL_CUSTOMER_BIRTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'customer_address',
            'label' => 'LBL_CUSTOMER_ADDRESS',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>
