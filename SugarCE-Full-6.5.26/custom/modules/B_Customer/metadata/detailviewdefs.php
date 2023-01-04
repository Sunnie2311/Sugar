<?php
$module_name = 'B_Customer';
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
            'name' => 'customer_id',
            'label' => 'LBL_CUSTOMER_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer_phone',
            'label' => 'LBL_CUSTOMER_PHONE',
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
          1 => 
          array (
            'name' => 'customer_email',
            'label' => 'LBL_CUSTOMER_EMAIL',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
